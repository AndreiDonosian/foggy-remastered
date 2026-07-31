<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

/**
 * Protects the login endpoint against distributed credential-stuffing on a
 * single account. Independently of the per-IP throttle, this tracks abuse
 * targeting one email address and bans that email from logging in for one
 * hour when either of these thresholds is crossed:
 *
 *   - more than 50 login attempts within a rolling 10-minute window, OR
 *   - attempts originating from 10 or more distinct IP addresses within 1 hour.
 */
class EmailLoginGuard
{
    private const MAX_ATTEMPTS_PER_10_MIN = 50;
    private const MAX_DISTINCT_IPS_PER_HOUR = 10;
    private const BAN_SECONDS = 3600;      // 1 hour
    private const ATTEMPT_WINDOW = 600;    // 10 minutes
    private const IP_WINDOW = 3600;        // 1 hour

    public function handle(Request $request, Closure $next): Response
    {
        $email = mb_strtolower(trim((string) $request->input('email')));

        // Nothing to guard without an email (validation will reject it later).
        if ($email === '') {
            return $next($request);
        }

        $emailKey = hash('sha256', $email);
        $banKey = "login-ban:{$emailKey}";

        if (Cache::has($banKey)) {
            return $this->banned($request);
        }

        $this->recordAttempt($request, $emailKey);

        if ($this->shouldBan($emailKey)) {
            Cache::put($banKey, true, self::BAN_SECONDS);

            return $this->banned($request);
        }

        return $next($request);
    }

    private function recordAttempt(Request $request, string $emailKey): void
    {
        $attemptsKey = "login-attempts:{$emailKey}";
        if (Cache::add($attemptsKey, 0, self::ATTEMPT_WINDOW)) {
            // Fresh window started.
        }
        Cache::increment($attemptsKey);

        $ipsKey = "login-ips:{$emailKey}";
        $ips = Cache::get($ipsKey, []);
        $ip = (string) $request->ip();
        if (! in_array($ip, $ips, true)) {
            $ips[] = $ip;
            Cache::put($ipsKey, $ips, self::IP_WINDOW);
        }
    }

    private function shouldBan(string $emailKey): bool
    {
        $attempts = (int) Cache::get("login-attempts:{$emailKey}", 0);
        $distinctIps = count(Cache::get("login-ips:{$emailKey}", []));

        return $attempts > self::MAX_ATTEMPTS_PER_10_MIN
            || $distinctIps >= self::MAX_DISTINCT_IPS_PER_HOUR;
    }

    private function banned(Request $request): Response
    {
        $message = __('auth.throttle_email');

        if ($request->expectsJson()) {
            return response()->json(['message' => $message], Response::HTTP_TOO_MANY_REQUESTS);
        }

        return redirect()->back()
            ->withInput($request->only('email'))
            ->withErrors(['email' => $message]);
    }
}

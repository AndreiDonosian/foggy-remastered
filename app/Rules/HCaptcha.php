<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;

/**
 * Verifies an hCaptcha challenge response server-side against hcaptcha.com.
 * If no secret is configured, the rule is skipped so local development is not
 * blocked; configure HCAPTCHA_SECRET in production to enforce it.
 */
class HCaptcha implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $secret = config('services.hcaptcha.secret');

        if (empty($secret)) {
            return; // Not configured — do not block.
        }

        if (empty($value)) {
            $fail(__('auth.captcha'));

            return;
        }

        try {
            $response = Http::asForm()
                ->timeout(10)
                ->post('https://hcaptcha.com/siteverify', [
                    'secret' => $secret,
                    'response' => $value,
                    'remoteip' => request()->ip(),
                ]);
        } catch (\Throwable $e) {
            $fail(__('auth.captcha'));

            return;
        }

        if (! $response->ok() || $response->json('success') !== true) {
            $fail(__('auth.captcha'));
        }
    }
}

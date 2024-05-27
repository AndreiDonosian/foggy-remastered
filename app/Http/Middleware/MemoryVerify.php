<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class MemoryVerify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!empty($request->get('file'))) {
            $mb = ($request->get('file')['size']/1024/1024);
            if(Auth::user()->mb_limit<=0 || Auth::user()->mb_limit-$mb<=0) {
                return redirect('/not-enough-credits');
            }
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

class VerifyCsrfToken extends \Illuminate\Foundation\Http\Middleware\VerifyCsrfToken
{
    /**
     * CSRF protection is enforced on every state-changing route. Upload
     * endpoints receive the token via the `_token` field / X-CSRF-TOKEN header.
     */
    protected $except = [];
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Symfony\Component\Translation\t;

class CreditsController extends Controller
{
    public function check(Request $request): string
    {
        $fileSize = $request->get('size');
        if($fileSize/1024/1024 > Auth::user()->mb_limit) {
            return json_encode([
                'error'=>true,
                'message'=>__('plans.not_enough_credits')
            ]);
        }

        return json_encode([
            'error'=>false,
            'message'=>__('plans.succeed')
        ]);
    }
}
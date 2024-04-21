<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function info()
    {
        echo view('user/info');
    }

    public function settings()
    {
        echo view('user/settings');
    }
}
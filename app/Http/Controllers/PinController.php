<?php

namespace App\Http\Controllers;

use App\Helpers\PinHelper;
use Illuminate\Http\Request;

class PinController extends Controller
{
    public function index()
    {
        echo view('new/pin');
    }

    public function getPin(Request $request): string
    {
        $pin = $request->get('pin');
        $contentHidden = $request->get('contentHidden');

        $files = PinHelper::getPathFolders($pin, $contentHidden);

        return view('new/_pin_table', compact('files', 'pin'))->render();

    }

    public function submitPin(Request $request): false|string
    {
        $subFolders = PinHelper::getSubFolders($request->get('pin'));
        return $request->file('file')->store('public/'.$subFolders);
    }
}
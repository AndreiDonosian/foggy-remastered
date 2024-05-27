<?php

namespace App\Http\Controllers;

use App\Helpers\FileHelper;
use App\Helpers\PinHelper;
use App\Models\File;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function submitPin(Request $request): array
    {
        $success = false;
        $chunk = $request->get('chunk', 0);
        $chunks = $request->get('chunks', 0);
        $fileExt = explode('.',$request->get('name'));
        $fileExt = end($fileExt);
        $fileName = sha1($request->get('file')['id'].$request->get('file')['name'].$request->get('file')['size']).'.'.$fileExt;
        $a = false;
        $uploadRet = FileHelper::chunkUploader($chunk, $chunks, $fileName, $request->get('pin'));

        if(!empty($uploadRet['saved'])) { //check if file fully uploaded
            $m = new File();
            $m->setAttribute('file_orig_name', $request->get('name'));
            $m->setAttribute('file_name', $fileName);
            $m->setAttribute('size', $request->get('file')['size']/1024); //in KB
            $m->setAttribute('user_id', Auth::user()->getAuthIdentifier());
            $m->setAttribute('is_encrypted', 0); //TODO: fix encryption for media files
            $m->save();

            Auth::user()->mb_limit -= $request->get('file')['size']/1024/1024;
            Auth::user()->save();

            $success = true;

            $a = FileHelper::makeFilePublic($uploadRet['path'], $fileName);
        }

        return [
            'success'=>$success,
            'a'=>$a
        ];
    }
}
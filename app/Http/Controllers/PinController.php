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

    public function submitPin(Request $request): false|string
    {
        $subFolders = PinHelper::getSubFolders($request->get('pin'));
        $chunk = $request->get('chunk', 0);
        $chunks = $request->get('chunks', 0);
        $fileExt = explode('.',$request->get('name'));
        $fileExt = end($fileExt);
        $ret = FileHelper::chunkUploader($chunk, $chunks, sha1($request->get('file')['id'].$request->get('file')['name'].$request->get('file')['size']).'.'.$fileExt, $request->get('pin'));
        $filePath = '';
        if(!empty($ret['saved'])) {
            $filePath = $ret['path'];
            $m = new File();
            $m->setAttribute('file_orig_name', $request->get('name'));
            $m->setAttribute('size', $request->get('file')['size']/1024); //in KB
            if($crypt = $request->get('crypt', '')) {
                $m->setAttribute('is_encrypted', 1);
            } else {
                $m->setAttribute('is_encrypted', 0);
            }
            $m->setAttribute('user_id', Auth::user()->getAuthIdentifier());

//            $filePath = $request->file('file')->store('public/'.$subFolders);
            if(!empty($crypt)) {
//            dd();
                FileHelper::encryptFile($filePath, $filePath.'_enc', $crypt);
                unlink($filePath);
            }

            $m->save();
            $user = User::query()->where('id', Auth::user()->getAuthIdentifier())->first();
//            $user->setAttribute('mb_limit', $user->getAttribute('mb_limit')-($request->get('file')['size']/1024/1024));
            $user->save();
        }

        return $filePath;
    }
}
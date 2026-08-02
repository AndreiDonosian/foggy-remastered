<?php

namespace App\Http\Controllers;

use App\Helpers\FileHelper;
use App\Helpers\PinHelper;
use App\Models\File;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

        // Only use the basename of the client filename to derive the extension.
        $rawName = basename((string) $request->get('name'));
        $fileExt = strtolower(pathinfo($rawName, PATHINFO_EXTENSION));

        abort_if($rawName === '' || $fileExt === '', 422, 'A valid file name is required.');
        abort_if(
            in_array($fileExt, ['php', 'phtml', 'phar', 'phps', 'pht', 'cgi', 'sh'], true),
            422,
            'This file type is not allowed.'
        );

        $fileName = sha1($request->get('file')['id'].$request->get('file')['name'].$request->get('file')['size']).'.'.$fileExt;
        $a = false;
        Storage::disk('local')->makeDirectory('storage1/'.PinHelper::getStoragePath($request->get('pin')));
        $filePath = Storage::disk('local')->path('storage1/'.PinHelper::getStoragePath($request->get('pin'))).'/'.$fileName;
        $uploadRet = FileHelper::chunkUploader($chunk, $chunks, $filePath);

        if(!empty($uploadRet['saved'])) { //check if file fully uploaded
            // Measure the real size on disk — never trust the client-reported
            // size, which could be forged to bypass the storage quota.
            $bytes = is_file($filePath) ? filesize($filePath) : 0;

            $m = new File();
            $m->setAttribute('file_orig_name', $request->get('name'));
            $m->setAttribute('file_name', $fileName);
            $m->setAttribute('size', $bytes / 1024); //in KB
            $m->setAttribute('user_id', Auth::user()->getAuthIdentifier());
            $m->setAttribute('is_encrypted', 0); //TODO: fix encryption for media files
            $m->save();

            $user = Auth::user();
            $user->mb_limit = max(0, $user->mb_limit - ($bytes / 1024 / 1024));
            $user->save();
            $success = true;
        }

        return [
            'success'=>$success,
            'a'=>$a
        ];
    }
}
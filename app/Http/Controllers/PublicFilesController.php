<?php

namespace App\Http\Controllers;

use App\Helpers\FileHelper;
use App\Helpers\PinHelper;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PublicFilesController extends Controller
{
    public function index()
    {
        echo view('public-files/index');
    }

    public function read(string $path)
    {
        $path = str_replace('-00-', '/', $path);

        $last = explode('/', $path);
        $fileName = end($last);
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename={$fileName}");
        header("Content-Type: application/octet-stream");
        header("Content-Transfer-Encoding: binary");

        // read the file from disk
        readfile($path);
    }

    public function upload(Request $request)
    {
        $success = false;
        $chunk = $request->get('chunk', 0);
        $chunks = $request->get('chunks', 0);
        $fileExt = explode('.',$request->get('name'));
        $fileExt = end($fileExt);
        $fileName = $request->get('name');
        $fileNameFull = $fileName.'.'.$fileExt;
        $a = false;
        Storage::disk('local')->makeDirectory('public/'.sha1($fileName));
        $filePath = Storage::disk('local')->path('public/'.sha1($fileName)).'/'.$fileNameFull;

        $uploadRet = FileHelper::chunkUploader($chunk, $chunks, $filePath);
        $path = '';

        if(!empty($uploadRet['saved'])) { //check if file fully uploaded
            FileHelper::decryptFile($uploadRet['path'], substr($uploadRet['path'], 0 ,-10), $request->get('crypt'));
            $path = '/storage/'.substr(substr($uploadRet['path'], 0 ,-10), stripos($uploadRet['path'], '/app/public')+12);
            $success = true;
        }

        return [
            'success'=>$success,
            'path'=>$path
        ];
    }
}
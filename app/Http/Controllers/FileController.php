<?php

namespace App\Http\Controllers;

use App\Helpers\FileHelper;
use App\Helpers\PinHelper;
use App\Models\File;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function delete(string $name, string $pin)
    {
        $found = false;
        $succ = false;

        $files = PinHelper::getPathFolders($pin);

        foreach ($files as $_file) {
            if($_file['meta']['name']==$name) {
                $found = true;
                break;
            }
        }
        if(!empty($found)) {
            $succ = unlink($_file['meta']['path']);
            File::where('id', $_file['meta']['id'])->delete();
        }

        return [
            'deleted'=>$succ,
            'found'=>$found
        ];
    }

    public function makePublic(string $name, string $pin)
    {
        $files = PinHelper::getPathFolders($pin);
        $found = false;
        $path = '';
        foreach ($files as $_file) {
            if($_file['meta']['name']==$name) {
                $found = true;
                break;
            }
        }

        if($found) {
            $path = FileHelper::makeFilePublic($_file['meta']['path'], $_file['meta']['name']);
            $pos = stripos($path, '/app/public/');
            $path = url('/storage/'.substr($path, $pos+12));
        }

        return [
            'path'=>$path
        ];
    }

    public function readFile(string $name, string $pin)
    {
        $files = PinHelper::getPathFolders($pin);
        $found = false;

        foreach ($files as $_file) {
            if($_file['meta']['name']==$name) {
                $found = true;
                break;
            }
        }
        if($found) {
            if(!file_exists($_file['meta']['path'])){ // file does not exist
                die('file not found');
            } else {
                header("Cache-Control: public");
                header("Content-Description: File Transfer");
                header("Content-Disposition: attachment; filename={$_file['meta']['name']}");
                header("Content-Type: {$_file['meta']['type']}");
                header("Content-Transfer-Encoding: binary");

                // read the file from disk
                readfile($_file['meta']['path']);
            }
        }

    }
}
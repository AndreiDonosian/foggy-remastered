<?php

namespace App\Http\Controllers;

use App\Helpers\PinHelper;
use App\Models\File;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function delete(string $name, string $pin)
    {
        $found = false;
        $files = PinHelper::getPathFolders($pin);

        foreach ($files as $_file) {
            if($_file['meta']['name']==$name) {
                $found = true;
                break;
            }
        }
        $succ = false;
        if(!empty($found)) {
            $succ = unlink($_file['meta']['path']);
            File::where('id', $_file['meta']['id'])->delete();
        }

        return [
            'deleted'=>$succ,
            'found'=>$found
        ];
    }
}
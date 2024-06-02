<?php

namespace App\Helpers;

use App\Models\File;
use Illuminate\Support\Facades\Auth;

class PinHelper
{
    public static function getPathFolders(string $pin, mixed $contentHidden = true): array
    {
        $subFolders = self::getSubFolders($pin);

        $output = [];
        if(is_dir(storage_path('app/storage1/'.$subFolders))) {
            foreach (scandir(storage_path('app/storage1/'.$subFolders)) as $k=>$file) {
                if($k==0||$k==1)
                    continue; //skip . and ..
                if(is_file(storage_path('app/storage1/').$subFolders.'/'.$file)) {
                    $fileStored = File::where('file_name', $file)->where('user_id', Auth::user()->getAuthIdentifier())->first();
                    if($fileStored) {
                        $output[] = [
                            'public_path'=>'/build/img/gallery/1.jpg',
                            'randId'=>sha1(mt_rand(0, time())),
                            'meta'=>[
                                'size'=> number_format(filesize(storage_path('app/storage1/').$subFolders.'/'.$file)/1024/1024,2) . 'MB',
                                'type'=>mime_content_type(storage_path('app/storage1/').$subFolders.'/'.$file),
                                'name'=>$fileStored->file_orig_name??$file,
                                'origname'=>$file,
                                'path'=>storage_path('app/storage1/').$subFolders.'/'.$file,
                                'id'=>$fileStored->id
                            ]
                        ];
                    }

                }
            }
        }

        return $output;
    }

    public static function getSubFolders(string $pin): string
    {
        $mainFolder = sha1(auth()->user()->getAttribute('crypt_passcode'). $pin);
        return substr($mainFolder, 0 ,3).
            '/'.substr($mainFolder, 3 ,3)
            .'/'. substr($mainFolder, 6 ,3).'/'.
            $mainFolder;
    }
}
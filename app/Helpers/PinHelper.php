<?php

namespace App\Helpers;

class PinHelper
{
    public static function getPathFolders(string $pin, bool $contentHidden): array
    {
        $subFolders = self::getSubFolders($pin);

        $output = [];
        if(is_dir(storage_path('app/public/'.$subFolders))) {
            foreach (scandir(storage_path('app/public/'.$subFolders)) as $k=>$file) {
                if($k==0||$k==1)
                    continue; //skip . and ..
                $output[] = [
                    'public_path'=>$contentHidden?'/build/img/gallery/1.jpg':'/storage/'.$subFolders.'/'.$file,
                    'meta'=>[
                        'size'=> number_format(filesize(storage_path('app/public/').$subFolders.'/'.$file)/1024/1024,2) . 'MB',
                        'type'=>mime_content_type(storage_path('app/public/').$subFolders.'/'.$file),
                        'name'=>$file
                    ]
                ];
            }
        }

        return $output;
    }

    public static function getSubFolders(string $pin): string
    {
        $mainFolder = sha1(auth()->user()->getAttribute('crypt_passcode').auth()->user()->getAttribute('email'). $pin);
        return substr($mainFolder, 0 ,3).
            '/'.substr($mainFolder, 3 ,3).'/'.
            '/'.substr($mainFolder, 6 ,3).'/'.
            $mainFolder;
    }
}
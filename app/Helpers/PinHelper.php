<?php

namespace App\Helpers;

use App\Models\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PinHelper
{
    public static function getPathFolders(string $pin, mixed $contentHidden = true): array
    {
        $subFolders = self::getStoragePath($pin);

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
                            'randId'=>Str::random(40),
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

    /**
     * Crypted, per-user root folder. It is derived only from the user (never
     * the pin), so every file a user uploads under any pin lands under this
     * single hashed directory. The name is a one-way hash, so browsing storage
     * never reveals which user owns the folder, yet all of a user's files can
     * be located/managed from one place.
     */
    public static function getUserFolder(): string
    {
        $user = auth()->user();
        $userFolder = sha1('foggy_user_'.$user->getAuthIdentifier().$user->getAttribute('crypt_passcode'));

        return substr($userFolder, 0, 3).
            '/'.substr($userFolder, 3, 3)
            .'/'.substr($userFolder, 6, 3).'/'.
            $userFolder;
    }

    /**
     * Full storage path for a pin: the crypted user folder followed by the
     * pin-specific sub-folders.
     */
    public static function getStoragePath(string $pin): string
    {
        return self::getUserFolder().'/'.self::getSubFolders($pin);
    }
}
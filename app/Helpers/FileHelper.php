<?php

namespace App\Helpers;

use App\Models\PublicFiles;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FileHelper
{

    const FILE_ENCRYPTION_BLOCKS = 10;

    protected static function getEncryptionBlocks(string $key): int
    {
        $numberBlocks = 0;

        foreach (str_split($key) as $char) {
            $numberBlocks+= ord($char);
        }

        return $numberBlocks;
    }

    /**
     * @param string $source  Path of the unencrypted file
     * @param string  $dest  Path of the encrypted file to created
     * @param mixed $key  Encryption key
     */

    public static function encryptFile(string $source, string $dest, mixed $key): void
    {
        $cipher = 'aes-256-cbc';
        $ivLenght = openssl_cipher_iv_length($cipher);
        $iv = openssl_random_pseudo_bytes($ivLenght);
        $filesize = filesize($source)*10;

        $fpSource = fopen($source, 'rb');
        $fpDest = fopen($dest, 'w');

        fwrite($fpDest, $iv);

        while (!feof($fpSource)) {
            $plaintext = fread($fpSource, $ivLenght * self::getEncryptionBlocks($key));
            $ciphertext = openssl_encrypt($plaintext, $cipher, $key, OPENSSL_RAW_DATA, $iv);
            $iv = substr($ciphertext, 0, $ivLenght);
            fwrite($fpDest, $ciphertext);
        }

        fclose($fpSource);
        fclose($fpDest);
    }

    /**
     * @param string $source  Path of the encrypted file
     * @param string $dest  Path of the decrypted file
     * @param mixed $key  Encryption key
     */
    public static function decryptFile(string $source,string $dest,mixed $key): void
    {
        $cipher = 'aes-256-cbc';
        $ivLenght = openssl_cipher_iv_length($cipher);

        $fpSource = fopen($source, 'rb');
        $fpDest = fopen($dest, 'w');

        $iv = fread($fpSource, $ivLenght);

        while (!feof($fpSource)) {
            $ciphertext = fread($fpSource, $ivLenght * (self::getEncryptionBlocks($key)+1));
            $plaintext = openssl_decrypt($ciphertext, $cipher, $key, OPENSSL_RAW_DATA, $iv);
            $iv = substr($ciphertext, 0, $ivLenght);

            fwrite($fpDest, $plaintext);
        }

        fclose($fpSource);
        fclose($fpDest);
    }

    public static function chunkUploader(int $chunk, int $chunks, $filePath)
    {

        $out = fopen("{$filePath}.part", $chunk == 0 ? "wb" : "ab");
        if ($out) {
            // Read binary input stream and append it to temp file
            $in = @fopen($_FILES['file']['tmp_name'], "rb");

            if ($in) {
                while ($buff = fread($in, 4096))
                    fwrite($out, $buff);
            } else
                return ['success' => false, 'err' => 2];

            @fclose($in);
            @fclose($out);

            @unlink($_FILES['file']['tmp_name']);
        } else
            return ['success' => false, 'err' => 1];

        $saved = false;
        // Check if file has been uploaded
        if (!$chunks || $chunk == $chunks - 1) {
            // Strip the temp .part suffix off
            $saved = true;
            rename("{$filePath}.part", $filePath);
        }

        return ['success' => true, 'saved'=>$saved, 'path'=>$filePath];
    }

    public static function makeFilePublic(string $localFilePath, string $fileName): string
    {
        Storage::disk('local')->makeDirectory('public/'.PinHelper::getSubFolders(Auth::user()->email));
        $publicPath = Storage::disk('local')->path('public/'.PinHelper::getSubFolders(Auth::user()->email));

        $existed = PublicFiles::where('path', $publicPath.'/'.$fileName)->first();

        if($existed) {
            return $publicPath.'/'.$fileName;
        }

        copy($localFilePath, $publicPath.'/'.$fileName);

        $p = new PublicFiles();
        $p->user_hash = '';
        $p->path = $publicPath.'/'.$fileName;
        $p->public_till = date('Y-m-d', strtotime('+1 day'));
        $p->save();

        return $publicPath.'/'.$fileName;
    }


    public static function getAbsolutePath(string $path): string
    {
        return substr(public_path('storage/' .$path), 6);
    }

    public static function getFileByName(string $name, string $pin, string $nameField = 'name')
    {
        $files = PinHelper::getPathFolders($pin);
        foreach ($files as $_file) {
            if($_file['meta'][$nameField]==$name) {
                return $_file;
            }
        }

        return [];
    }


}
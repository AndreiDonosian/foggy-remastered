<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

class FileHelper
{

    const FILE_ENCRYPTION_BLOCKS = 1000;

    /**
     * @param  $source  Path of the unencrypted file
     * @param  $dest  Path of the encrypted file to created
     * @param  $key  Encryption key
     */

    public static function encryptFile($source, $dest, $key): void
    {
        $cipher = 'aes-256-cbc';
        $ivLenght = openssl_cipher_iv_length($cipher);
        $iv = openssl_random_pseudo_bytes($ivLenght);

        $fpSource = fopen($source, 'rb');
        $fpDest = fopen($dest, 'w');

        fwrite($fpDest, $iv);

        while (!feof($fpSource)) {
            $plaintext = fread($fpSource, $ivLenght * self::FILE_ENCRYPTION_BLOCKS);
            $ciphertext = openssl_encrypt($plaintext, $cipher, $key, OPENSSL_RAW_DATA, $iv);
            $iv = substr($ciphertext, 0, $ivLenght);

            fwrite($fpDest, $ciphertext);
        }

        fclose($fpSource);
        fclose($fpDest);
    }

    /**
     * @param  $source  Path of the encrypted file
     * @param  $dest  Path of the decrypted file
     * @param  $key  Encryption key
     */
    public static function decryptFile($source, $dest, $key): void
    {
        $cipher = 'aes-256-cbc';
        $ivLenght = openssl_cipher_iv_length($cipher);

        $fpSource = fopen($source, 'rb');
        $fpDest = fopen($dest, 'w');

        $iv = fread($fpSource, $ivLenght);

        while (!feof($fpSource)) {
            $ciphertext = fread($fpSource, $ivLenght * (self::FILE_ENCRYPTION_BLOCKS + 1));
            $plaintext = openssl_decrypt($ciphertext, $cipher, $key, OPENSSL_RAW_DATA, $iv);
            $iv = substr($plaintext, 0, $ivLenght);

            fwrite($fpDest, $plaintext);
        }

        fclose($fpSource);
        fclose($fpDest);
    }

    public static function chunkUploader(int $chunk, int $chunks, $fileName, mixed $pin)
    {
        // Open temp file
        Storage::disk('local')->makeDirectory('public/'.PinHelper::getSubFolders($pin));
        $filePath = Storage::disk('local')->path('public/'.PinHelper::getSubFolders($pin)).'/'.$fileName;

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
        } else {}

        return ['success' => true, 'saved'=>$saved, 'path'=>$filePath];
    }

    public static function getAbsolutePath(string $path): string
    {
        return substr(public_path('storage/' .$path), 6);
    }


}
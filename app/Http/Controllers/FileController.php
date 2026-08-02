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
            if ($_file['meta']['name'] == $name) {
                $found = true;
                break;
            }
        }
        if (!empty($found)) {
            $succ = unlink($_file['meta']['path']);
            File::where('id', $_file['meta']['id'])->delete();
        }

        return [
            'deleted' => $succ,
            'found' => $found
        ];
    }

    public function makePublic(string $name, string $pin)
    {
        $_file = FileHelper::getFileByName($name, $pin);
        $path = '';

        if ($_file) {
            $path = FileHelper::makeFilePublic($_file['meta']['path'], $_file['meta']['name']);
            $pos = stripos($path, '/app/public/');
            $path = url('/storage/' . substr($path, $pos + 12));
        }

        return [
            'path' => $path
        ];
    }

    public function makePublicEncoded(string $name, string $pin)
    {
        $_file = FileHelper::getFileByName($name, $pin);
        $path = '';

        if ($_file) {
            $newPath = explode('.', $_file['meta']['path']);
            unset($newPath[count($newPath) - 1]);
            $newPath = join('.', $newPath) . '.avks';
            FileHelper::encryptFile($_file['meta']['path'], $newPath, request()->get('key'));

            $path = FileHelper::makeFilePublic($newPath, $_file['meta']['origname'].'.avks');
            $pos = stripos($path, '/app/public/');
            $path = route('public.read', ['path'=>str_replace('/','-00-', 'storage/' . substr($path, $pos + 12))]);
        }

        return ['path'=>$path];
    }

    public function readFile(string $name, string $pin)
    {
        $_file = FileHelper::getFileByName($name, $pin);

        if (!$_file) {
            abort(401);
        }

        if (!is_file($_file['meta']['path'])) { // file does not exist
            abort(404);
        }

        return response()->streamDownload(
            fn () => readfile($_file['meta']['path']),
            basename($_file['meta']['name']),
            ['Content-Type' => $_file['meta']['type']]
        );
    }

    public function readFileEncrypted(string $name, string $pin)
    {
        $_file = FileHelper::getFileByName($name, $pin);

        if (!$_file) {
            abort(401);
        }

        if (!is_file($_file['meta']['path'])) { // file does not exist
            abort(404);
        }

        $newPath = explode('.', $_file['meta']['path']);
        unset($newPath[count($newPath) - 1]);
        $newPath = join('.', $newPath) . '.avks';

        FileHelper::encryptFile($_file['meta']['path'], $newPath, request()->post('key'));

        return response()->streamDownload(
            fn () => readfile($newPath),
            basename($_file['meta']['origname']),
            ['Content-Type' => $_file['meta']['type']]
        );
    }
}
<?php

namespace App\Http\Controllers;

use App\Helpers\FileHelper;
use App\Helpers\PinHelper;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class PublicFilesController extends Controller
{
    /**
     * File extensions that must never be written to a web-served directory,
     * as they can be executed by the web server (RCE) or abused for XSS.
     */
    private const BLOCKED_EXTENSIONS = [
        'php', 'php3', 'php4', 'php5', 'php7', 'php8', 'phtml', 'pht', 'phar',
        'phps', 'cgi', 'pl', 'py', 'rb', 'sh', 'bash', 'exe', 'com', 'bat',
        'cmd', 'jsp', 'jspx', 'asp', 'aspx', 'ashx', 'htaccess', 'htm', 'html',
        'svg', 'xhtml', 'shtml',
    ];

    public function index()
    {
        echo view('public-files/index');
    }

    public function read(string $path): StreamedResponse
    {
        // Never trust a client-supplied filesystem path. Resolve the request
        // against the known public storage root and reject anything that
        // escapes it (path traversal / LFI).
        $decoded = str_replace('-00-', '/', $path);

        $root = realpath(Storage::disk('local')->path('public'));
        $real = realpath(Storage::disk('local')->path(ltrim(
            preg_replace('#^storage/#', '', $decoded),
            '/'
        )));

        abort_if($root === false || $real === false, 404);
        abort_unless(str_starts_with($real, $root . DIRECTORY_SEPARATOR), 404);
        abort_unless(is_file($real), 404);

        // basename() strips any directory component and CR/LF, preventing
        // HTTP response-splitting via the Content-Disposition header.
        return response()->streamDownload(
            fn () => readfile($real),
            basename($real),
            ['Content-Type' => 'application/octet-stream']
        );
    }

    public function upload(Request $request)
    {
        $success = false;
        $chunk = $request->get('chunk', 0);
        $chunks = $request->get('chunks', 0);

        // Only ever use the basename of the client filename, and validate the
        // extension against a deny-list so executable files cannot be dropped.
        $rawName = basename((string) $request->get('name'));
        $fileExt = strtolower(pathinfo($rawName, PATHINFO_EXTENSION));

        abort_if($rawName === '' || $fileExt === '', 422, 'A valid file name is required.');
        abort_if(in_array($fileExt, self::BLOCKED_EXTENSIONS, true), 422, 'This file type is not allowed.');

        $fileName = pathinfo($rawName, PATHINFO_FILENAME);
        $fileNameFull = $fileName.'.'.$fileExt;
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
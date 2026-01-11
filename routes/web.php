<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/download/certificate/{filename}', function ($filename) {
    $safeName = basename($filename);
    if (!str_ends_with(strtolower($safeName), '.pdf')) {
        abort(404);
    }
    $path = public_path('assets/certificate/' . $safeName);
    if (!is_file($path)) {
        abort(404);
    }
    $size = filesize($path);
    return response()->stream(function () use ($path) {
        $handle = fopen($path, 'rb');
        if ($handle === false) {
            return;
        }
        while (!feof($handle)) {
            echo fread($handle, 8192);
        }
        fclose($handle);
    }, 200, [
        'Content-Type' => 'application/pdf',
        'Content-Length' => $size,
        'Content-Disposition' => 'attachment; filename="' . $safeName . '"',
        'Cache-Control' => 'no-store, no-cache, must-revalidate',
        'Pragma' => 'no-cache',
    ]);
});

Route::get('/download/certificate/{filename}', function ($filename) {
    $safeName = basename($filename);
    if (!str_ends_with(strtolower($safeName), '.pdf')) {
        abort(404);
    }
    $path = public_path('assets/certificate/' . $safeName);
    if (!is_file($path)) {
        abort(404);
    }
    return response()->download($path, $safeName, ['Content-Type' => 'application/pdf']);
});

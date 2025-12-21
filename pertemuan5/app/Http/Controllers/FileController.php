<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function write()
    {
        Storage::put('contoh.txt', 'Ini adalah isi file yang ditulis oleh Laravel');
        return 'File berhasil ditulis';
    }

    public function read()
    {
        if (Storage::exists('contoh.txt')) {
            return Storage::get('contoh.txt');
        }
        
        return 'File belum ada';
    }
}

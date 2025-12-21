<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

//File Handling
Route::get('/file/write', [FileController::class, 'write']);
Route::get('/file/read', [FileController::class, 'read']);

<?php

use App\Modules\UploadedImages\Http\Controllers\UploadedImagesController;
use Illuminate\Support\Facades\Route;

Route::get('/index', [UploadedImagesController::class, 'index'])
    ->name('uploaded-images.index');

Route::get('/upload', [UploadedImagesController::class, 'uploadForm'])
    ->name('uploaded-images.upload-form');

Route::post('/upload', [UploadedImagesController::class, 'upload'])
    ->name('uploaded-images.upload');

Route::post('/async-upload', [UploadedImagesController::class, 'upload'])
    ->name('uploaded-images.async-upload');

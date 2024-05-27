<?php

use App\Http\Controllers\PostinganController;
use App\Http\Controllers\TraktirKopiController;
use App\Http\Controllers\DiskusiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('postingans.index');
});

Route::resource('postingans', PostinganController::class);
Route::resource('traktirkopis', TraktirKopiController::class);
Route::resource('diskusis', DiskusiController::class);
Route::post('diskusis/{diskusi}/comment', [DiskusiController::class, 'storeComment'])->name('diskusis.storeComment');

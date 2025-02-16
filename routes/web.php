<?php

use Illuminate\Support\Facades\Route;

Route::get('/demo', function () {
    return view('demo');
});

Route::get('/{code?}', \App\Http\Controllers\StationController::class)->name('station');
Route::get('/stations', \App\Http\Controllers\DatalistController::class)->name('stations');

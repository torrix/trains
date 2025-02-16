<?php

use Illuminate\Support\Facades\Route;

Route::get('/stations', \App\Http\Controllers\DatalistController::class)->name('stations');
Route::get('/{code?}', \App\Http\Controllers\StationController::class)->name('station');

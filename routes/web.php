<?php

use App\Http\Controllers\CatwayController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/catways', [CatwayController::class, 'index']);
Route::get('catways/{id}', [CatwayController::class, 'show']);

Route::get('/reservations', [ReservationController::class, 'index']);

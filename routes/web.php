<?php

use App\Http\Controllers\CatwayController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/catways', [CatwayController::class, 'index']);
Route::get('/catways/add', [CatwayController::class, 'create']);
Route::post('/catways', [CatwayController::class, 'store']);
Route::get('catways/{id}', [CatwayController::class, 'show']);
Route::get('catways/edit/{id}', [CatwayController::class, 'edit']);
Route::put('catways/{id}', [CatwayController::class, 'update']);

Route::get('/reservations', [ReservationController::class, 'index']);

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatwayController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('home');
});

Route::middleware('auth')->group(function () {
    Route::get('/catways', [CatwayController::class, 'index']);
    Route::get('/catways/add', [CatwayController::class, 'create']);
    Route::post('/catways', [CatwayController::class, 'store']);
    Route::get('catways/{id}', [CatwayController::class, 'show']);
    Route::get('catways/edit/{id}', [CatwayController::class, 'edit']);
    Route::put('catways/{id}', [CatwayController::class, 'update']);
    Route::delete('catways/{id}', [CatwayController::class, 'destroy']);

    Route::get('/reservations', [ReservationController::class, 'index']);
    Route::get('/reservations/add', [ReservationController::class, 'create']);
    Route::post('/reservations', [ReservationController::class, 'store']);
    Route::get('/reservations/{id}', [ReservationController::class, 'show']);
    Route::get('/reservations/edit/{id}', [ReservationController::class, 'edit']);
    Route::put('/reservations/{id}', [ReservationController::class, 'update']);
    Route::delete('/reservations/{id}', [ReservationController::class, 'destroy']);

    Route::middleware('isAdmin')->group(function () {
        Route::get('/users', [UserController::class, 'index']);
        Route::get('/users/create', [UserController::class, 'create']);
        Route::post('/users', [UserController::class, 'store']);
        Route::get('/users/{user}', [UserController::class, 'show']);
        Route::get('/users/edit/{user}', [UserController::class, 'edit']);
        Route::put('/users/{user}', [UserController::class, 'update']);
        Route::delete('/users/{user}', [UserController::class, 'destroy']);
    });
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KoordinatorController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('admins/koordinators', AdminController::class);
Route::resource('koordinators', KoordinatorController::class);
Route::get('auth/koordinators/login', [AuthController::class, 'formLoginKoordinator']);
Route::post('auth/koordinators/login', [AuthController::class, 'loginKoordinator']);
Route::post('auth/koordinators/logout', [AuthController::class, 'koordinatorLogout']);

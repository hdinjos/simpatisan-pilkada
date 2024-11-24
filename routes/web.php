<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KoordinatorController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\CheckUserRoleAdmin;
use App\Http\Middleware\CheckUserRoleKoordinator;

Route::get('/', function () {
    return view('welcome');
});
Route::get('auth/admins/login', [AuthController::class, 'formLoginAdmin']);
Route::post('auth/admins/login', [AuthController::class, 'loginAdmin']);
Route::post('auth/admins/logout', [AuthController::class, 'adminLogout'])->middleware(CheckUserRoleAdmin::class);

Route::resource('admins/koordinators', AdminController::class)->middleware(CheckUserRoleAdmin::class);
Route::post('admins/koordinators/delete', [AdminController::class, 'koordinatorDelete'])->middleware(CheckUserRoleAdmin::class);
Route::resource('koordinators', KoordinatorController::class)->middleware(CheckUserRoleKoordinator::class);

Route::get('auth/koordinators/login', [AuthController::class, 'formLoginKoordinator']);
Route::post('auth/koordinators/login', [AuthController::class, 'loginKoordinator']);
Route::post('auth/koordinators/logout', [AuthController::class, 'koordinatorLogout'])->middleware(CheckUserRoleKoordinator::class);


// Route::post('auth/koordinators/logout', [AuthController::class, 'koordinatorLogout']);

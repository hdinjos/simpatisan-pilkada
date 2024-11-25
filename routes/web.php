<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KoordinatorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TpsController;
use App\Http\Middleware\CheckUserRoleAdmin;
use App\Http\Middleware\CheckUserRoleKoordinator;

Route::get('/', function () {
    return view('welcome');
});

//admin
Route::get('auth/admins/login', [AuthController::class, 'formLoginAdmin']);
Route::post('auth/admins/login', [AuthController::class, 'loginAdmin']);
Route::post('auth/admins/logout', [AuthController::class, 'adminLogout'])->middleware(CheckUserRoleAdmin::class);

Route::resource('admins/koordinators', AdminController::class)->middleware(CheckUserRoleAdmin::class);
Route::get('admins/tps', [AdminController::class, 'indexTps'])->middleware(CheckUserRoleAdmin::class);
Route::get('admins/koordinators/changepassword/{id}', [AdminController::class, 'changePasswordForm'])->middleware(CheckUserRoleAdmin::class);
Route::post('admins/koordinators/changepassword', [AdminController::class, 'changePassword'])->middleware(CheckUserRoleAdmin::class);
Route::post('admins/koordinators/delete', [AdminController::class, 'koordinatorDelete'])->middleware(CheckUserRoleAdmin::class);
Route::post('admins/koordinators/{id}', [AdminController::class, 'update'])->middleware(CheckUserRoleAdmin::class);

//kordinator
Route::get('auth/koordinators/login', [AuthController::class, 'formLoginKoordinator']);
Route::post('auth/koordinators/login', [AuthController::class, 'loginKoordinator']);
Route::post('auth/koordinators/logout', [AuthController::class, 'koordinatorLogout'])->middleware(CheckUserRoleKoordinator::class);

Route::resource('koordinators', KoordinatorController::class)->middleware(CheckUserRoleKoordinator::class);
Route::prefix('koordinators/{koordinator}')->group(function () {
    Route::resource('tps', TpsController::class);
});




// Route::post('auth/koordinators/logout', [AuthController::class, 'koordinatorLogout']);

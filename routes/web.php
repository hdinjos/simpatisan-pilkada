<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KoordinatorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TpsController;
use App\Http\Middleware\CheckUserRoleAdmin;
use App\Http\Middleware\CheckUserRoleKoordinator;
use App\Http\Controllers\SaksiController;

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

//hide sementara
// Route::prefix('koordinators/{koordinator}')->group(function () {
//     Route::resource('tps', TpsController::class);
// });


//Saksi
Route::get('saksi', [SaksiController::class, 'registerForm']);
Route::post('saksi', [SaksiController::class, 'register']);
Route::get('saksi/{id}', [SaksiController::class, 'index']);
Route::get('saksi/{id}/create', [SaksiController::class, 'create']);
Route::post('saksi/{id}/create', [SaksiController::class, 'store']);
Route::get('saksi/{id}/edit/{tps_id}', [SaksiController::class, 'edit']);
Route::post('saksi/{id}/update/{tps_id}', [SaksiController::class, 'update']);
Route::get('ceknik/saksi', [SaksiController::class, 'ceknikForm']);
Route::post('ceknik/saksi', [SaksiController::class, 'ceknik']);

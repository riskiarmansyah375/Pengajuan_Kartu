<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PengajuanController;
use App\Http\Controllers\Admin\KartuSampahController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LaporanController;


use App\Http\Controllers\Warga\DashboardController as WargaDashboardController;
use App\Http\Controllers\Warga\PengajuanController as WargaPengajuanController;
use App\Http\Controllers\Warga\KartuController as WargaKartuController;

use App\Http\Controllers\RT\DashboardController as RTDashboardController;
use App\Http\Controllers\RT\WargaController as RTWargaController;
use App\Http\Controllers\RT\KartuController as RTKartuController;
use App\Http\Controllers\RT\LaporanController as RTLaporanController;

/*
|--------------------------------------------------------------------------
| Guest
|--------------------------------------------------------------------------
*/

Route::get(
    '/register',
    [RegisterController::class,'index']
)->name('register');

Route::post(
    '/register',
    [RegisterController::class,'store']
)->name('register.store');


Route::get('/login', [LoginController::class, 'index'])
    ->name('login');

Route::post('/login', [LoginController::class, 'authenticate'])
    ->name('login.proses');

/*
|--------------------------------------------------------------------------
| Auth
|--------------------------------------------------------------------------
*/

Route::post('/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

       Route::get(
    '/dashboard',
    [DashboardController::class,'index']
)->name('dashboard');


Route::get(
    'users',
    [UserController::class,'index']
)->middleware('permission:user.view')
 ->name('users.index');

Route::get(
    'users/create',
    [UserController::class,'create']
)->middleware('permission:user.create')
 ->name('users.create');

Route::post(
    'users',
    [UserController::class,'store']
)->middleware('permission:user.create')
 ->name('users.store');

Route::get(
    'users/{user}/edit',
    [UserController::class,'edit']
)->middleware('permission:user.edit')
 ->name('users.edit');

Route::put(
    'users/{user}',
    [UserController::class,'update']
)->middleware('permission:user.edit')
 ->name('users.update');

Route::delete(
    'users/{user}',
    [UserController::class,'destroy']
)->middleware('permission:user.delete')
 ->name('users.destroy');
Route::get(
    'roles',
    [RoleController::class,'index']
)->middleware('permission:role.view')
 ->name('roles.index');

Route::get(
    'roles/create',
    [RoleController::class,'create']
)->middleware('permission:role.create')
 ->name('roles.create');

Route::post(
    'roles',
    [RoleController::class,'store']
)->middleware('permission:role.create')
 ->name('roles.store');

Route::get(
    'roles/{role}/edit',
    [RoleController::class,'edit']
)->middleware('permission:role.edit')
 ->name('roles.edit');

Route::put(
    'roles/{role}',
    [RoleController::class,'update']
)->middleware('permission:role.edit')
 ->name('roles.update');

Route::delete(
    'roles/{role}',
    [RoleController::class,'destroy']
)->middleware('permission:role.delete')
 ->name('roles.destroy');

        Route::get(
    'roles/{role}/permissions',
    [RoleController::class,'permissions']
)->middleware('permission:role.edit')
 ->name('roles.permissions');

Route::post(
    'roles/{role}/permissions',
    [RoleController::class,'syncPermissions']
)->middleware('permission:role.edit')
 ->name('roles.permissions.store');

Route::get(
    'permissions',
    [PermissionController::class,'index']
)->middleware('permission:permission.view')
 ->name('permissions.index');

Route::get(
    'permissions/create',
    [PermissionController::class,'create']
)->middleware('permission:permission.create')
 ->name('permissions.create');

Route::post(
    'permissions',
    [PermissionController::class,'store']
)->middleware('permission:permission.create')
 ->name('permissions.store');

Route::get(
    'permissions/{permission}/edit',
    [PermissionController::class,'edit']
)->middleware('permission:permission.edit')
 ->name('permissions.edit');

Route::put(
    'permissions/{permission}',
    [PermissionController::class,'update']
)->middleware('permission:permission.edit')
 ->name('permissions.update');

Route::delete(
    'permissions/{permission}',
    [PermissionController::class,'destroy']
)->middleware('permission:permission.delete')
 ->name('permissions.destroy');

        Route::get(
    'roles/{role}/permissions',
    [RoleController::class, 'permissions']
)->name('roles.permissions');

Route::post(
    'roles/{role}/permissions',
    [RoleController::class, 'syncPermissions']
)->name('roles.permissions.store');

Route::get(
    'pengajuans',
    [PengajuanController::class,'index']
)->middleware('permission:pengajuan.view');

Route::get(
    'pengajuans/{pengajuan}',
    [PengajuanController::class,'show']
)->middleware('permission:pengajuan.view');

Route::post(
    'pengajuans/{pengajuan}/approve',
    [PengajuanController::class,'approve']
)->middleware('permission:pengajuan.approve');

Route::post(
    'pengajuans/{pengajuan}/reject',
    [PengajuanController::class,'reject']
)->middleware('permission:pengajuan.reject');

Route::get(
    'pengajuans',
    [PengajuanController::class,'index']
)->middleware('permission:pengajuan.view')
 ->name('pengajuans.index');

 Route::get(
    'pengajuans/{pengajuan}',
    [PengajuanController::class,'show']
)->middleware('permission:pengajuan.view')
 ->name('pengajuans.show');

 Route::post(
    'pengajuans/{pengajuan}/approve',
    [PengajuanController::class,'approve']
)->middleware('permission:pengajuan.approve')
 ->name('pengajuans.approve');

 Route::post(
    'pengajuans/{pengajuan}/reject',
    [PengajuanController::class,'reject']
)->middleware('permission:pengajuan.reject')
 ->name('pengajuans.reject');

 Route::get(
    'kartus',
    [KartuSampahController::class,'index']
)->middleware('permission:kartu.view')
 ->name('kartus.index');

 Route::get(
    'kartus/{kartu}',
    [KartuSampahController::class,'show']
)->name('kartus.show');

Route::get(
    'kartus/{kartu}/pdf',
    [KartuSampahController::class,'pdf']
)->middleware('permission:kartu.print')
 ->name('kartus.pdf');

 Route::get(
    'laporan',
    [LaporanController::class,'index']
)->middleware('permission:laporan.view')
 ->name('laporan.index');

    });

/*
|--------------------------------------------------------------------------
| RT
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])
    ->prefix('rt')
    ->name('rt.')
    ->group(function () {

        Route::get(
            '/dashboard',
            [RTDashboardController::class,'index']
        )->name('dashboard');

        Route::get(
            '/warga',
            [RTWargaController::class,'index']
        )->name('warga.index');

        Route::get(
            '/kartu',
            [RTKartuController::class,'index']
        )->name('kartu.index');

        Route::get(
            '/laporan',
            [RTLaporanController::class,'index']
        )->name('laporan.index');

    });
/*
|--------------------------------------------------------------------------
| Warga
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])
    ->prefix('warga')
    ->name('warga.')
    ->group(function () {


    Route::get('/dashboard',[WargaDashboardController::class,'index'])->name('dashboard');

           Route::get(
            'pengajuan/create',
            [WargaPengajuanController::class,'create']
        )->name('pengajuan.create');

        Route::post(
            'pengajuan/store',
            [WargaPengajuanController::class,'store']
        )->name('pengajuan.store');

        Route::get(
            'pengajuan',
            [WargaPengajuanController::class,'index']
        )->name('pengajuan.index');

    Route::get(
    'kartu',
    [WargaKartuController::class,'index']
)->name('kartu.index');

Route::get(
    'kartu/{kartu}/pdf',
    [WargaKartuController::class,'download']
)->name('kartu.pdf');

    });

/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect()->route('login');
});
<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CekToken;
use App\Http\Middleware\CekRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//endpoint login
Route::post('/user/login',[AuthController::class, 'login']);
Route::get('/user/profile',[AuthController::class, 'profile'])->middleware([CekToken::class]);
Route::get('/user/edit',[AuthController::class, 'edit'])->middleware(CekToken::class);
Route::get('/user/laporan',[AuthController::class, 'laporan'])->middleware(CekToken::class);


// api User Keseluruhan
Route::post('/user',[UserController::class, 'createOne_User'])->middleware(CekToken::class);
Route::get('/user',[UserController::class, 'findAll_User'])->middleware(CekToken::class);

// api Role
Route::get('/role',[RoleController::class, 'findAll_Role'])->middleware(CekToken::class);
Route::get('/role/{roleId}',[RoleController::class, 'findOne_Role'])->middleware(CekToken::class);

// api Jabatan
Route::get('/jabatan',[JabatanController::class, 'findAll_Jabatan'])->middleware(CekToken::class);
Route::get('/jabatan/{jabatanId}',[JabatanController::class, 'findOne_Jabatan'])->middleware(CekToken::class);
Route::post('/jabatan',[JabatanController::class, 'insertOne_Jabatan'])->middleware(CekToken::class);
Route::put('/jabatan/{jabatanId}',[JabatanController::class, 'updateOne_Jabatan'])->middleware(CekToken::class);
Route::delete('/jabatan/{jabatanId}',[JabatanController::class, 'deleteOne_Jabatan'])->middleware(CekToken::class);

// api Organisasi
Route::get('/organisasi',[OrganisasiController::class, 'findAll_Organisasi'])->middleware(CekToken::class);

// api Status
Route::get('/status',[StatusController::class, 'findAll_Status'])->middleware(CekToken::class);
Route::get('/status/{statusId}',[StatusController::class, 'findOne_Status'])->middleware(CekToken::class);

// api Permintaan
Route::get('/permintaan',[PelayananController::class, 'getAll_Permintaan'])->middleware(CekToken::class);
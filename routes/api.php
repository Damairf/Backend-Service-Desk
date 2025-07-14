<?php

use App\Http\Controllers\JabatanController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CekToken;
use App\Http\Middleware\CekRole;
use App\Models\Organisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/user',[UserController::class, 'createOne_User']);
Route::post('/user/login',[UserController::class, 'login']);
Route::get('/user/profile',[UserController::class, 'profile'])->middleware([CekToken::class]);
Route::get('/user/edit',[UserController::class, 'edit'])->middleware([CekToken::class, cekRole::class . ':Pengelola']);
Route::get('/user/laporan',[UserController::class, 'laporan'])->middleware([CekToken::class, cekRole::class, "KepalaDinas"]);

Route::get('/role',[RoleController::class, 'findAll_Role']);
Route::get('/role/{roleId}',[RoleController::class, 'findOne_Role']);

Route::get('/jabatan',[JabatanController::class, 'findAll_Jabatan']);
Route::get('/jabatan/{jabatanId}',[JabatanController::class, 'findOne_Jabatan']);
Route::post('/jabatan',[JabatanController::class, 'insertOne_Jabatan']); 
Route::put('/jabatan/{jabatanId}',[JabatanController::class, 'updateOne_Jabatan']);
Route::delete('/jabatan/{jabatanId}',[JabatanController::class, 'deleteOne_Jabatan']);

Route::get('/organisasi',[OrganisasiController::class, 'findAll_Organisasi']);

Route::get('/status',[StatusController::class, 'findAll_Status']);
Route::get('/status/{statusId}',[StatusController::class, 'findOne_Status']);


<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PemerintahController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('login');

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'action_register']);

Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'action_login']);

Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/user', [UserController::class, 'index'])->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/pemerintah', [PemerintahController::class, 'index'])->middleware('auth');
Route::get('/tambah-pemerintah', [PemerintahController::class, 'tambah_pemerintah'])->middleware('auth');
Route::post('/pemerintah/tambah-pemerintah', [PemerintahController::class, 'action_tambah_pemerintah']);
Route::get('/pemerintah/{id}/edit-pemerintah', [PemerintahController::class, 'edit_pemerintah'])->middleware('auth');
Route::post('/pemerintah/{id}/edit-pemerintah', [PemerintahController::class, 'action_edit_pemerintah']);
Route::get('/pemerintah/{id}/hapus_pemerintah', [PemerintahController::class, 'hapus_pemerintah']);

Route::get('/jabatan', [JabatanController::class, 'index'])->middleware('auth');
Route::get('/tambah-jabatan', [JabatanController::class, 'tambah_jabatan'])->middleware('auth');
Route::post('/jabatan/tambah-jabatan', [JabatanController::class, 'action_tambah_jabatan']);
Route::get('/jabatan/{id}/edit-jabatan', [JabatanController::class, 'edit_jabatan'])->middleware('auth');
Route::post('/jabatan/{id}/edit-jabatan', [JabatanController::class, 'action_edit_jabatan']);
Route::get('/jabatan/{id}/hapus_jabatan', [JabatanController::class, 'hapus_jabatan']);

Route::get('/bidang', [BidangController::class, 'index'])->middleware('auth');
Route::get('/tambah-bidang', [BidangController::class, 'tambah_bidang'])->middleware('auth');
Route::post('/bidang/tambah-bidang', [BidangController::class, 'action_tambah_bidang']);
Route::get('/bidang/{id}/edit-bidang', [BidangController::class, 'edit_bidang'])->middleware('auth');
Route::post('/bidang/{id}/edit-bidang', [BidangController::class, 'action_edit_bidang']);
Route::get('/bidang/{id}/hapus_bidang', [BidangController::class, 'hapus_bidang']);

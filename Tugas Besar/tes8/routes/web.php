<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VotingController;

// Halaman Utama
Route::get('/', function () {
    return view('welcome');
});

// Rute untuk Autentikasi
Route::get('/auth/login_admin', [AuthController::class, 'index'])->name('auth.index');
Route::post('/auth/login_admin', [AuthController::class, 'store'])->name('auth.store');

// Rute untuk Admin
Route::get('/admin/dashboard', [AuthController::class, 'dashboard'])->name('auth.dashboard');
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/voting', [AdminController::class, 'show']);

// Rute untuk Kandidat
Route::get('/candidate', [CandidateController::class, 'index'])->name('candidate.index');
Route::get('/candidate/create', [CandidateController::class, 'create'])->name('candidate.create');
Route::post('/candidate', [CandidateController::class, 'store'])->name('candidate.store');
Route::get('/candidate/{candidate}', [CandidateController::class, 'show'])->name('candidate.show');


// Rute untuk Dashboard Pengguna
Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');

// Rute untuk Voting
Route::get('/voting', [VotingController::class, 'index'])->name('voting.index');
Route::get('/voting/create', [VotingController::class, 'create'])->name('voting.create');
Route::post('/voting', [VotingController::class, 'store'])->name('voting.store');
Route::get('/voting/voting', [VotingController::class, 'show'])->name('voting.show');
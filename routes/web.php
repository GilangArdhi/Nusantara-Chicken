<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'home2']);
Route::get('/login', [AuthController::class, 'login']);
Route::get('/signup', [AuthController::class, 'daftar']);
Route::post('/masuk', [AuthController::class, 'masuk'])->name('masuk');
// Route::post('/daftar', [AuthController::class, 'postdaftar'])->name('daftar');
Route::post('/register', [AuthController::class, 'postdaftar']);

Route::middleware(['auth', 'role:pelanggan'])->group(function () {
    Route::get('/home', [LandingPageController::class, 'home'])->middleware('checkauth');
    Route::get('/produk', [LandingPageController::class, 'produk'])->middleware('checkauth');
    Route::get('/ulasan', [LandingPageController::class, 'ulasan']);
    Route::get('/detail', [LandingPageController::class, 'details'])->middleware('checkauth');
    Route::post('/makeFeed', [LandingPageController::class, 'buatKomen']);
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'admin']);
    Route::post('insert', [AdminController::class, 'insert']);
    Route::get('mengedit/{id}', [AdminController::class, 'details'])->name('mengedit');
    Route::post('edit', [AdminController::class, 'edit']);
    Route::post('delete', [AdminController::class, 'delete']);
    Route::post('deletefeed', [AdminController::class, 'dltFeedback']);
    Route::get('userFeed', [AdminController::class, 'feedback']);
});
Route::middleware(['auth'])->group(function () {
    // Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/logout', [AuthController::class, 'logout']);
});
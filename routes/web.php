<?php

use App\Http\Controllers\Web\Auth\LoginPageController;
use App\Http\Controllers\Web\Auth\RegisterPageController;
use App\Http\Controllers\Web\Auth\AuthController;
use App\Http\Controllers\Web\CategoriesPageController;
use App\Http\Controllers\Web\MainPageController;
use App\Http\Controllers\Web\ProductPageController;
use App\Http\Controllers\Web\RecommendationPageController;
use Illuminate\Support\Facades\Route;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider and all of them will
 * | be assigned to the "web" middleware group. Make something great!
 * |
 */

Route::get('/', [MainPageController::class, 'index']);
Route::get('/jenis-laptop', [CategoriesPageController::class, 'index']);
Route::get('/jenis-laptop/{name}', [CategoriesPageController::class, 'show'])->name('categories');
Route::get('/daftar', [RegisterPageController::class, 'index']);
Route::get('/produk/{slug}', [ProductPageController::class, 'show'])->name('produk.show');

Route::get('/masuk', [LoginPageController::class, 'index'])->name('masuk');
Route::post('/masuk', [LoginPageController::class, 'login'])->name('login');
Route::get('/daftar', [RegisterPageController::class, 'index']);
Route::post('/daftar', [RegisterPageController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/rekomendasi', [RecommendationPageController::class, 'index'])
    ->name('product.recommendation')
    ->middleware('auth');


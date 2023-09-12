<?php

use App\Http\Controllers\SendController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider and assigned to the
| "web" middleware group. Make something great!
|
*/

Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/belanjasekarang', [HomeController::class, 'belanjasekarang'])->name('belanjasekarang');
Route::get('/hubungi', [HomeController::class, 'hubungi'])->name('hubungi');
Route::get('/infoproduk', [HomeController::class, 'infoproduk'])->name('infoproduk');
Route::get('/produk', [HomeController::class, 'produk'])->name('produk');
Route::get('/tentangkami', [HomeController::class, 'tentangkami'])->name('tentangkami');
Route::get('/testi', [HomeController::class, 'testi'])->name('testi');
Route::get('/vr', [HomeController::class, 'vr'])->name('vr');
Route::post('/send', [SendController::class, 'sendMessage'])->name('send.message');



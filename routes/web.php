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
Route::get('/download', [HomeController::class, 'download'])->name('download');
Route::get('/testi', [HomeController::class, 'testi'])->name('testi');
Route::get('/ar', [HomeController::class, 'ar'])->name('ar');
// Route Bencana
Route::get('/GempaBumi', [HomeController::class, 'GempaBumi'])->name('GempaBumi');
Route::get('/Kekeringan', [HomeController::class, 'Kekeringan'])->name('Kekeringan');
Route::get('/GunungMeletus', [HomeController::class, 'GunungMeletus'])->name('GunungMeletus');
Route::get('/Tsunami', [HomeController::class, 'Tsunami'])->name('Tsunami');
Route::get('/Banjir', [HomeController::class, 'Banjir'])->name('Banjir');
Route::get('/TanahLongsor', [HomeController::class, 'TanahLongsor'])->name('TanahLongsor');

// Route view blender
Route::get('/vGempa', [HomeController::class, 'vGempa'])->name('vGempa');
Route::get('/vKekeringan', [HomeController::class, 'vKekeringan'])->name('vKekeringan');
Route::get('/vGunung', [HomeController::class, 'vGunung'])->name('vGunung');
Route::get('/vTsunami', [HomeController::class, 'vTsunami'])->name('vTsunami');
Route::get('/vBanjir', [HomeController::class, 'vBanjir'])->name('vBanjir');
Route::get('/vLongsor', [HomeController::class, 'vLongsor'])->name('vLongsor');

Route::post('/send', [SendController::class, 'sendMessage'])->name('send.message');



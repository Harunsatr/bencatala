<?php

use App\Http\Controllers\BayesController;
use App\Http\Controllers\ConfusionController;
use App\Http\Controllers\ConfusionKmeansController;
use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KmeansController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// home
Route::get('/', [HomeController::class, 'index'])->name('home');

// about
Route::get('/about', [HomeController::class, 'about'])->name('about');

// service
Route::get('/service', [HomeController::class, 'service'])->name('service');

// detect
Route::get('/detect', [HomeController::class, 'detect'])->name('detect');

// feature
Route::get('/feature', [HomeController::class, 'feature'])->name('feature');

// team
Route::get('/team', [HomeController::class, 'team'])->name('team');

// testimonial
Route::get('/testimonial', [HomeController::class, 'testimonial'])->name('testimonial');

// contact
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactsController::class, 'store'])->name('contacts');

Auth::routes();

// kmeans
Route::get('/kmeans', [KmeansController::class, 'index'])->name('kmeans');
Route::post('/kmeansOutput', [KmeansController::class, 'output'])->name('kmeansOutput');

// naives bayes
Route::get('/bayes', [BayesController::class, 'index'])->name('bayes');
Route::post('/bayesOutput', [BayesController::class, 'output'])->name('outputBayes');

// confusion matriks kmeans
Route::get('/confusion-kmeans', [ConfusionKmeansController::class, 'confusionKmeans'])->name('confusionKmeans');

// confusion matriks bayes
Route::get('/confusion-bayes', [ConfusionController::class, 'confusionBayes'])->name('confusionBayes');

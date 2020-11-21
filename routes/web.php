<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', [ContactController::class, 'show'])->name('contact-show');
Route::get('/cars', [CarController::class, 'show'])->name('cars');
Route::post('/contact', [ContactController::class, 'store'])->name('contact-store');

Route::get('/about', [ArticlesController::class, 'about']);



// to read
Route::get('/articles', [ArticlesController::class, 'index'])->name('articles-index');
// to create & store
Route::post('/articles', [ArticlesController::class, 'store']);
Route::get('/articles/create', [ArticlesController::class, 'create']);
Route::get('/articles/{article}', [ArticlesController::class, 'show'])->name('articles-show');
Route::get('/articles/{article}/edit', [ArticlesController::class, 'edit']);
Route::put('/articles/{article}', [ArticlesController::class, 'update'] );


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('payments/create', function () {
    return view('payments.create');
})->name('create-payment');

Route::middleware(['auth:sanctum', 'verified'])->post('payments', function () {
    return view('payment');
})->name('payment');



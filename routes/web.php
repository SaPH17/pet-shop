<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\PetCategoryController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::middleware(['auth'])->group(function () {
    Route::resource('cart', CartController::class);
    Route::resource('transaction', TransactionController::class);
});

Route::resource('category', PetCategoryController::class);
Route::resource('pet', PetController::class);
Route::resource('forum', ForumController::class)->only(['store', 'update', 'destroy']);


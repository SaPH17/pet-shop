<?php

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

use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return redirect('/home');
});

Auth::routes();

Route::post('register', 'UserController@store');

Route::group(function (){
    Route::post('/home', 'PetCategoryController@store');
    Route::get('/category/add', 'PetCategoryController@create');
    Route::delete('/category/{category}/delete', 'PetCategoryController@destroy');
    Route::patch('/category/{category}/edit', 'PetCategoryController@update');
    Route::get('/category/{category}/edit', 'PetCategoryController@edit');
    Route::post('/pet', 'PetController@store');
    Route::get('/pet/add', 'PetController@create');
    Route::get('/pet/{pet}/edit', 'PetController@edit');
    Route::delete('/pet/{pet}/delete', 'PetController@destroy');
    Route::patch('/pet/{pet}/edit', 'PetController@update');
})->middleware('checkAdmin');

Route::get('/pet/{pet}', 'PetController@show');
Route::get('/home', 'PetCategoryController@index');
Route::get('/category/{pet_category}', 'PetCategoryController@show');

Route::group(function (){
    Route::get('/cart', 'CartController@index');
    Route::get('/transaction', 'TransactionController@index');
    Route::get('/transaction/{transaction}', 'TransactionController@show');
    Route::post('/pet/{pet}', 'CartController@store');
    Route::patch('/cart/{cart}/edit', 'CartController@update');
    Route::delete('/cart/{cart}/delete', 'CartController@destroy');
    Route::post('/cart/checkout', 'TransactionController@store');
})->middleware('auth');


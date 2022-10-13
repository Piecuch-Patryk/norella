<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

Auth::routes();

Route::controller(MainController::class)->group(function() {
    // Main Page
    Route::get('/', 'index')->name('main.index');
});

Route::controller(CategoryController::class)->group(function() {
    // Categories
    Route::get('/kategorie', 'index')->name('category.index');
    Route::get('/kategoria/edit/{id}', 'edit')->name('category.edit')->middleware('auth');
    Route::put('/kategoria/{category}', 'update')->name('category.update')->middleware('auth');
    Route::post('/dodaj-kategorie', 'store')->name('category.store')->middleware('auth');
    Route::delete('/usun-kategorie/{category}', 'destroy')->name('category.delete')->middleware('auth');
    Route::get('/dodaj-kategorie', 'create')->name('category.create')->middleware('auth');
    Route::get('/kategoria/{id}', 'show')->name('category.show');
});

Route::controller(ProductController::class)->group(function() {
    // Products
    Route::get('/produkty', 'index')->name('product.index');
    Route::get('/produkt/{id}', 'edit')->name('product.edit')->middleware('auth');
    Route::put('/produkt/{product}', 'update')->name('product.update')->middleware('auth');
    Route::post('/dodaj-produkt', 'store')->name('product.store')->middleware('auth');
    Route::delete('/usun-produkt/{product}', 'destroy')->name('product.delete')->middleware('auth');
    Route::get('/dodaj-produkt', 'create')->name('product.create')->middleware('auth');
});

Route::controller(ReviewController::class)->group(function() {
    // Reviews
    Route::get('/opinie', 'index')->name('review.index');
    Route::get('/dodaj-opinie', 'create')->name('review.create');
    Route::post('/dodaj-opinie', 'store')->name('review.store');
    Route::delete('/usun-opinie/{review}', 'destroy')->name('review.delete')->middleware('auth');
});

Route::view('/o-nas', 'about.index')->name('about.index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

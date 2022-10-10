<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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
    Route::get('/kategoria/{id}', 'edit')->name('category.edit')->middleware('auth');
    Route::put('/kategoria/{category}', 'update')->name('category.update')->middleware('auth');
    Route::post('/dodaj-kategorie', 'store')->name('category.store')->middleware('auth');
    Route::delete('/usun-kategorie/{category}', 'destroy')->name('category.delete')->middleware('auth');
    Route::get('/dodaj-kategorie', 'create')->name('category.create')->middleware('auth');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

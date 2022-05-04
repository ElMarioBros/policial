<?php

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

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/credential/{id}', [App\Http\Controllers\HomeController::class, 'credential'])->name('credential');
Route::get('/print/{id}', [App\Http\Controllers\HomeController::class, 'print'])->name('print');

Route::get('/map', [App\Http\Controllers\HomeController::class, 'map'])->name('map');


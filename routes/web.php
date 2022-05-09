<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);

Route::controller(HomeController::class)->group(function(){
    Route::get('/home', 'index')->name('home');
    Route::get('/register', function(){
        return view('register');
    })->name('register');
    Route::post('/register', 'store')->name('store-agent');
    Route::get('/print/{id}', 'print')->name('print');
    Route::get('/credential/{id}',  'credential')->name('credential');
});

/*
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/credential/{id}', [HomeController::class, 'credential'])->name('credential');
Route::get('/print/{id}', [HomeController::class, 'print'])->name('print');

Route::get('/map', [HomeController::class, 'map'])->name('map');
*/


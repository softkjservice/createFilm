<?php

use App\Http\Controllers\PictureActionControllers;
use App\Http\Controllers\PictureControllers;
use App\Http\Controllers\FileController;
use App\Http\Controllers\OrderController;
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

Route::middleware(['auth', 'verified'])->group(function() {
    Route::resource('orders', OrderController::class);
//Route::resource('files', FileController::class);
    Route::resource('pictures', PictureControllers::class);
    Route::post('/up/{picture}', [App\Http\Controllers\PictureActionControllers::class, 'up'])->name('up');
    Route::post('/down', [App\Http\Controllers\PictureActionControllers::class, 'down'])->name('down');
});



Route::get('/', function () {
    return view('welcome');
});

/*Auth::routes();*/
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

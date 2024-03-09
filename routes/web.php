<?php

use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\VideojuegoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('videojuegos', VideojuegoController::class);
Auth::routes();

Route::resource('comentarios', ComentarioController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/inicio', [App\Http\Controllers\InicioController::class, 'index'])->name('inicio');
Route::get('/articulos', [App\Http\Controllers\ArticlesController::class, 'index'])->name('articulos');
Route::get('/config', [App\Http\Controllers\ConfigController::class, 'index'])->name('config');
Route::get('/Article', [App\Http\Controllers\ArticleController::class, 'index'])->name('Article');


Route::resource('articles', ArticleController::class);

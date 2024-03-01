<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\PostagemController;
use App\Http\Controllers\CategoriaController;





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

Route::get('teste', [TesteController::class, 'index']);

Route::get('postagem', [PostagemController::class, 'index'])->name('postagem.index');

Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

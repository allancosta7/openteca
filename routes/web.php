<?php

use App\Http\Controllers\LivroController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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



Route::get('/', [UsuarioController::class, 'homeView']);
Route::get('/login', [UsuarioController::class, 'loginView']);
Route::get('/cadastro', [UsuarioController::class, 'cadastroView']);
Route::get('/minha-conta', [UsuarioController::class, 'contaView']);

Route::get('/pesquisa-livro', [LivroController::class, 'pesquisaView']);
Route::get('/info-livro', [LivroController::class, 'infoView']);
Route::get('/meus-livros', [LivroController::class,'meusView']);

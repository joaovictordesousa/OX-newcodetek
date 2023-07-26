<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', [CadastroController::class, 'index'])->name('index');
Route::get('/index', [CadastroController::class, 'index'])->name('index');
Route::get('/index/cadastro', [CadastroController::class, 'cadastro'])->name('NovoCadastro');
Route::get('/index/relatoriomes', [CadastroController::class, 'relatoriomes'])->name('relatorio.mes');

Route::post('/cadastro', [CadastroController::class, 'store'])->name('NovoCadastro.store');

Route::delete('/registros/{id}', [CadastroController::class, 'destroy'])->name('deletarRegistro');


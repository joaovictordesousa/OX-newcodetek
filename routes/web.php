<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BezerrosController;
use App\Http\Controllers\InseminadorController;
use App\Http\Controllers\TouroController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ResultsController;
use App\Http\Controllers\SheetController;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/home', [SheetController::class, 'index'])->name('sheet.dashboard');
    Route::get('/home/create', [SheetController::class, 'create'])->name('sheet.create');
    Route::post('/home', [SheetController::class, 'store'])->name('sheet.store');
    Route::get('/home/{sheet}/show', [SheetController::class, 'show'])->name('sheet.show');
    Route::get('/home/{sheet}/edit', [SheetController::class, 'edit'])->name('sheet.edit');
    Route::put('/home/{sheet}', [SheetController::class, 'update'])->name('sheet.update');
    Route::get('/home/pdf/{sheet}', [SheetController::class, 'pdf'])->name('sheet.pdf');
    Route::delete('/sheet/{sheet}', [SheetController::class, 'destroy'])->name('sheet.destroy');
    
    Route::get('/report', [ReportController::class, 'dashboard'])->name('report.dashboard');
    Route::post('/report', [ReportController::class, 'GetReports'])->name('report.GetReports');
    Route::get('/report/pdf', [ReportController::class, 'pdf'])->name('report.pdf');
    Route::get('/results', [ResultsController::class, 'results'])->name('results.dashboard');

    // ------------------ CRUD BEZERRO ------------------------------------------------------
    Route::get('/cadastrosbezerros', [BezerrosController::class, 'index'])->name('bezerros.cadastrosbezerros');


    // ------------------------ CRUD TOURO ------------------------------------------
    Route::get('/cadastrostouros', [TouroController::class, 'index'])->name('touro.cadastratouro');
    Route::get('/cadastrostouros/create', [TouroController::class, 'create'])->name('touro.create');
    Route::post('/cadastrostouros', [TouroController::class, 'store'])->name('touro.store');
    Route::get('/cadastrostouros/{Racadotouro}/edit', [TouroController::class, 'edit'])->name('touro.edit');
    Route::put('/cadastrostouros/{Racadotouro}', [TouroController::class, 'update'])->name('touro.update');
    Route::delete('/cadastrostouros/{Racadotouro}', [TouroController::class, 'destroy'])->name('touro.destroy');
    
    // ---------------------- CRUD INSEMINADOR -----------------------------------------
    Route::get('/cadastrainseminador', [InseminadorController::class, 'index'])->name('inseminador.cadastrainseminador');
    Route::get('/cadastrainseminador/create', [InseminadorController::class, 'create'])->name('inseminador.create');
    Route::post('/cadastrainseminador', [InseminadorController::class, 'store'])->name('inseminador.store');
    Route::get('/cadastrainseminador/{Inseminador}/edit', [InseminadorController::class, 'edit'])->name('inseminador.edit');
    Route::put('/cadastrainseminador/{Inseminador}', [InseminadorController::class, 'update'])->name('inseminador.update');
    Route::delete('/cadastrainseminador/{Inseminador}', [InseminadorController::class, 'destroy'])->name('inseminador.destroy');
});

require __DIR__.'/auth.php';

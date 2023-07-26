<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReportController;
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

Route::get('/', [SheetController::class, 'index'])->name('sheet.index');
Route::get('/home', [SheetController::class, 'index'])->name('sheet.index');
Route::get('/home/create', [SheetController::class, 'create'])->name('sheet.create');
Route::post('/home', [SheetController::class, 'store'])->name('sheet.store');
Route::get('/home/{sheet}/show', [SheetController::class, 'show'])->name('sheet.show');
Route::get('/home/{sheet}/edit', [SheetController::class, 'edit'])->name('sheet.edit');
Route::put('/registros/{sheet}', [SheetController::class, 'update'])->name('sheet.update');

Route::get('/report', [ReportController::class, 'index'])->name('report.index');
Route::post('/report', [ReportController::class, 'GetReports'])->name('report.GetReports');
Route::get('/report/{de}/{ate}', [ReportController::class, 'index'])->name('report.results');


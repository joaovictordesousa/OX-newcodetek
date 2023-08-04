<?php
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

Route::get('/', [SheetController::class, 'index'])->name('sheet.index');
Route::get('/home', [SheetController::class, 'index'])->name('sheet.index');
Route::get('/home/create', [SheetController::class, 'create'])->name('sheet.create');
Route::post('/home', [SheetController::class, 'store'])->name('sheet.store');
Route::get('/home/{sheet}/show', [SheetController::class, 'show'])->name('sheet.show');
Route::get('/home/{sheet}/edit', [SheetController::class, 'edit'])->name('sheet.edit');
Route::put('/home/{sheet}', [SheetController::class, 'update'])->name('sheet.update');
Route::get('/home/pdf/{sheet}', [SheetController::class, 'pdf'])->name('sheet.pdf');



Route::get('/report', [ReportController::class, 'index'])->name('report.index');
Route::post('/report', [ReportController::class, 'GetReports'])->name('report.GetReports');
Route::get('/report/pdf', [ReportController::class, 'pdf'])->name('report.pdf');

Route::get('/results', [ResultsController::class, 'results'])->name('results.index');




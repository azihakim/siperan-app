<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PrintController;
use App\Livewire\EditLaporan;
use App\Models\Laporan;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

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


Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
// web.php
Route::get('/item/{id}/edit', 'ItemController@edit')->name('item.edit');

Route::get('/edit-laporan/{id}', [Laporan::class, 'edit'])->name('edit-laporan');

// Route::get('/edit-laporan/{id}/edit', 'ItemController@edit')->name('item.edit');


Route::get('/print-sppa/{id}', [PrintController::class, 'printPermohonan'])->name('print-sppa');
Route::get('/print-sptjm/{id}', [PrintController::class, 'printSptjm'])->name('print-sptjm');
Route::get('/print-matriks/{id}', [PrintController::class, 'printMatriks'])->name('print-matriks');
Route::get('/export-matriks/{id}', [PrintController::class, 'exportMatriks'])->name('export-matriks');
Route::get('/print-dpa/{id}', [PrintController::class, 'printDpa'])->name('print-dpa');



// Route::get('/edit/{id}', function () {
//     return view('laporan.editLaporan');
// });

Route::get('/laporan', function () {
    return view('laporan.createLaporan');
});

Route::get('/s', function () {
    return view('surat');
});





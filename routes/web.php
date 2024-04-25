<?php

use App\Http\Controllers\DashboardController;
use App\Livewire\EditLaporan;
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

Route::get('/edit-laporan', [EditLaporan::class, 'edit'])->name('edit-laporan');





Route::get('/laporan', function () {
    return view('laporan.createLaporan');
});

Route::get('/s', function () {
    return view('surat');
});





<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\SuplierController;

Route::get('/', function () {
    return view('welcome');
});

//Route Supliers
Route::get('/supliers', [SuplierController::class,'index'])->name('supliers.index');
Route::get('/supliers/create', [SuplierController::class,'create'])->name('supliers.create');
Route::post('/supliers/create', [SuplierController::class,'store'])->name('supliers.store');

//Route Data Barang
Route::get('/resouce', [ResourceController::class,'index']);
 
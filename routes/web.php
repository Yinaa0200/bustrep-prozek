<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\SuplierController;

Route::get('/', function () {
    return view('welcome');
});

//Route Supliers
Route::get('/supliers', [SuplierController::class,'index']);
Route::get('/supliers/create', [SuplierController::class,'create']);

//Route Data Barang
Route::get('/resouce', [ResourceController::class,'index']);
 
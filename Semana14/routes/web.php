<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiControlador;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pagina',[MiControlador::class,'index']);
Route::get('/sorbetes', [MiControlador::class, 'catalogo2']);
Route::get('/cereal/{id}',[MiControlador::class,'ver']);
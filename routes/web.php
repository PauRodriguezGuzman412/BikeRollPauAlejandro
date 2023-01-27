<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/mostrarData', function () {
    $data= date("d-m-Y");
    $titulo= "La data actual es:";

    return view("mostrarData",array(
        'titulo' => $titulo,
        'data' => $data,
    ));
});


Route::get('/peliculas/{titulo}', function ($titulo) {
    return view("peliculas",array(
        'titulo' => $titulo,
    ));
});


Route::get("/index",[IndexController::class, 'index'])->name("index.index");
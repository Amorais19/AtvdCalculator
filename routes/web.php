<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::post('/calcular', [App\Http\Controllers\ControllerCalculo::class, 'Calcular'])->name('calcular');


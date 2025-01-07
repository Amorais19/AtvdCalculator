<?php

use App\Http\Controllers\ControllerCalculo;

Route::get('/', function () {
    return view('index');
});

Route::post('/calcular', [ControllerCalculo::class, 'calcular'])->name('calcular');


<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('demo/maquinaria', function () {
    return view('demo.maquinaria');
});
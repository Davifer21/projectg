<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return  view('welcome');
});

Route::get('/jogos', function () {
    return view('jogos'); // O nome do arquivo, sem a extensão .blade.php
});

Route::get('/davi', function () {
    return view('davi');
});

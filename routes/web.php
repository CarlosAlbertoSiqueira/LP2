<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login/{dia}/{mes}/{ano?}', function($dia, $mes, $ano = 2026) {
    return view('site.login', ['dia' => $dia, 'mes' => $mes, 'ano' => $ano]);
});

Route::get('/jumbo', function() {
    return view('site.sobre');
});
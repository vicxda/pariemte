<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/ropa-hombre', function () {
    return view('lista')->with('section', 'ropa de hombre');
});

Route::get('/ropa-mujer', function () {
    return view('lista')->with('section', 'ropa de mujer');
});

Route::get('/ropa-hot', function () {
    return view('lista')->with('section', 'ropa hot');
});

// Otras rutas según sea necesario para productos, clientes, etc.

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// DEPOIS COLOCAR PARA OS CONTROLLERS REDIRECIONAR
/** Website */
Route::get('/', function () {
    return view('index');
});
Route::get('sobre', function () {
    return view('about');
});
Route::get('contato', function () {
    return view('contact');
});
Route::get('galeria', function () {
    return view('gallery');
});
Route::get('pacotes', function () {
    return view('packages');
});
Route::get('precos', function () {
    return view('pricing');
});

/** Admin Panel */
Route::get('admin', function () {
    return view('admin');
});
Route::get('admin/{any}', function () {
    return view('admin');
})->where('any', '(.*)');

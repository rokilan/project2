<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/review', function () {
    return view('review');
});

Route::post('/review/check', function () {
    return view('review/check');
});

Route::get('/user/{id}/{name}', function ($id, $name) {
    return 'ID: ' .$id. '. Name: '.$name;
});

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
    $data = array('menu' => 'home');
    return view('home', ['data' => $data]);
});

Route::get('/schedule', function () {
    $data = array('menu' => 'schedule');
    return view('schedule', ['data' => $data]);
});

Route::get('/offers', function () {
    $data = array('menu' => 'offers');
    return view('offers', ['data' => $data]);
});

Route::get('/team', function () {
    $data = array('menu' => 'team');
    return view('team', ['data' => $data]);
});

Route::get('/contact', function () {
    $data = array('menu' => 'contact');
    return view('contact', ['data' => $data]);
});

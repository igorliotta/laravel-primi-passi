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



// Imposto una rotta che mi porti alla visualizzazione della vista home.blade.php
Route::get('/home', function () {
    
    $data = [
        'title' => 'HelloWorld'
    ];

    return view('home', $data,);
})->name('home');



Route::get('/introduzione', function () {

    return view('introduzione');

})->name('introduzione');



Route::get('/chi-siamo', function () {

    return view('chi-siamo');

})->name('chi-siamo');



Route::get('/shop', function () {

    return view('shop');

})->name('shop');



Route::get('/social', function () {

    return view('social');

})->name('social');



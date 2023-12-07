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

// Route::get('/', function () {
//     return view('welcome');
// });


// Imposto una rotta che mi porti alla visualizzazione della vista home.blade.php
Route::get('/home', function () {
    $data = [
        'title' => 'HelloWorld'
    ];

    return view('home', $data);
});
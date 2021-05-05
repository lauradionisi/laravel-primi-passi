<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aboutus', function () {
    $data = [
        'messaggio' => 'Chi siamo',
            'teams' => [
                'Sebastiano Pasca',
                'Michela Piras',
                'Federica Manograssi'
            ]      
            ];
    return view('aboutus', $data);
});

Route::get('/blog', function () {
    return view('blog');
});

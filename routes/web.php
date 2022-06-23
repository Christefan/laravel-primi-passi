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
    $data = [
        'title' => 'Hello World',
    ];
    
    return view('home',$data);
});
Route::get('/prova1', function () {
    $data = [
        'title' => 'Hello Option 1',
    ];
    
    return view('option1',$data);
});

Route::get('/prova2', function () {
    $data = [
        'title' => 'Hello Option 2',
    ];
    
    return view('option2',$data);
});
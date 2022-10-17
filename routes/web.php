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

Route::get('coba', function(){
    return "Halooo :D";
});

Route::get('coba1', function(){
    return ['Rikza','Haris'];
});

Route::get('coba2',function(){
    return [
        'Nama' => 'Rikza Haris',
        'NIS' => 3103120198,
        'Kelas' => 'XII RPL6'
    ];
});

Route::get('coba3',function(){
    return response()->json(
        [
            'Nama' => 'Rikza Haris',
            'NIS' => 3103120198,
            'Kelas' => 'XII RPL6' 
        ],201
    );
}); 
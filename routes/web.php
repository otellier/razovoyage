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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function() {
    echo "page about";
});
Route::prefix('/admin')->group(function() {
    Route::get('/voyages', function() {
        echo "Page voyages de la console d'administration";
    });
    Route::get('/users', function() {
        echo "Page users de la console d'administration";
    });
});
Route::get('/voyages/{id}', function($id) {
    return "page voyage".$id;
});
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
Route::get('/voyages', function() {
    return view('voyages');
});
Route::prefix('/admin')->group(function() {
     
    Route::get('/voyages', function () {
        $newVoyage = array(
            "titre" => $_POST['titre'],
            "description" => $_POST['description'],
            "destination" => $_POST['destination'],
            "prix" => $_POST['prix'],
            "image" => $_POST['image']
        );
        VoyageController.show($newVoyage);
    });
    Route::get('/users', function() {
        echo "Page users de la console d'administration";
    });
    Route::get('voyages/{id}/delete', 'VoyageController@destroy');
});
Route::get('/voyages/{id}', function($id) {
    return "page voyage".$id;
});

Route::get('/about', 'StaticPageController@about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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

Route::get('/', 'FactController@randomfact');
Route::get('/liste', 'FactController@facts');
Route::get('/ajout', 'FactController@ajout');
Route::post('/ajout', 'FactController@formulaire');
Route::get('/modif/{id}', 'FactController@modif');
Route::post('/modif/{id}', 'FactController@formulairemodif');
Route::get('/delete/{id}', 'FactController@delete');


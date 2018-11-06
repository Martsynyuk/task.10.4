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

Route::post('/clients', 'ClientsController@showAllClients');
Route::post('/client/{id?}', 'ClientsController@showClient')->where('id', '[0-9]+');
Route::post('/client/form/{id?}', 'ClientsController@addOrUpdateClient')->where('id', '[0-9]+');
Route::post('/client/delete/{id}', 'ClientsController@deleteClient')->where('id', '[0-9]+');

Route::post('/projects', 'ProjectsController@showProjects');
Route::post('/project/{id?}', 'ProjectsController@showProject')->where('id', '[0-9]+');
Route::post('/project/form/{id?}', 'ProjectsController@addOrUpdateProject')->where('id', '[0-9]+');
Route::post('/project/delete/{id}', 'ProjectsController@deleteProject')->where('id', '[0-9]+');

Route::get('/', function () {
    return view('home');
});

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
use App\Project;
Route::get('/', function () {
//    $data=Project::orderBy('id', 'desc')->paginate(3);
    $data=Project::orderBy('id', 'desc')->get();
    return view('welcome',compact('data'));
});


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::resource('/admin/projects', 'ProjectController');

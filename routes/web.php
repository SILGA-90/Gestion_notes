<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('hello', function () {
//     return view('pages/hello');
// });

// Route::get('hello/{name}', function ($name) {
//     return "bienvenue ! $name";
// });
// Route::get('article/{url}-{id}', function ($url, $id) {
//     return "Mon article a l'url: $url et l'id: $id";
// })->where('url', '[a-z0-9/-]+')->where('id', '[0-9]+');


route::get('profile', 'profileController@index'); 


Route::get('/', function () {
    return view('welcome');
});


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes(['verify' => true]);

// Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('classes', 'classesController');

Route::resource('classrooms', 'classroomsController');

Route::resource('admissions', 'admissionsController');

Route::resource('roles', 'rolesController');

Route::resource('profeseurs', 'profeseursController');

Route::resource('levels', 'levelsController');

Route::resource('attendances', 'attendancesController');

Route::resource('annees', 'anneesController');

Route::resource('users', 'usersController');

Route::resource('semestres', 'semestresController');

Route::resource('jours', 'joursController');

Route::resource('courses', 'coursesController');
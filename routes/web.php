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
// use App\Http\Middleware\CheckAge;

// Route::get('/', function () {
//     return view('welcome');
// })->middleware('web');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::group(['middleware' => 'auth'],function(){
// 	Route::resource('/books','BooksController');
// });

Route::any('{all}',function(){
	return view('welcome');
})
->where(['all' => '.*']);
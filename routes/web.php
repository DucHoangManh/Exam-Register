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
    return view('user.home');
})->name('home')->middleware('student');

Route::get('home', function () {
    return view('user.home');
})->middleware('student');

Route::get('registration', function () {
    return view('user.registration');
});

Route::get('calendar', function () {
    return view('user.calendar');
});

/*
* Login
*/
Route::get('/loginn', 'LoginController@getLogin')->name('loginG');
Route::post('/loginn', 'LoginController@postLogin')->name('loginn');

Route::get('logout', function() {
	Auth::logout();
	return redirect()->back();
})->name('logout');

Route::get('/welcome', function() {
	return view('welcome');
})->name('welcome');

Route::group(['prefix'=>'admin','middleware'=>'admin'],function(){
	Route::get('home', function (){
		return view('admin.home');
	});

	Route::resource('student', 'StudentController');
});
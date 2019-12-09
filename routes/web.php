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

	/*
	*	Resource
	*/
	Route::resource('student', 'StudentController');
	Route::resource('user', 'UserController');
	Route::resource('teacher', 'TeacherController');
	Route::resource('class', 'ClassController');
	Route::resource('subject', 'SubjectController');
	Route::resource('location', 'LocationController');
	Route::resource('room', 'RoomController');

	/*
	*	Import
	*/
	Route::group(['prefix'=>'import'], function() {
		Route::post('student', 'StudentController@import');
		Route::post('user', 'UserController@import');
		Route::post('teacher', 'TeacherController@import');
		Route::post('class', 'ClassController@import');
		Route::post('subject', 'SubjectController@import');
		Route::post('location', 'LocationController@import');
		Route::post('room', 'RoomController@import');
	});
	


	Route::get('student/delete/{student}', 'StudentController@destroy');
	Route::get('user/delete/{user}', 'UserController@destroy');
	Route::get('teacher/delete/{teacher}', 'TeacherController@destroy');
	Route::get('class/delete/{class}', 'ClassController@destroy');
	Route::get('subject/delete/{class}', 'SubjectController@destroy');
	Route::get('location/delete/{location}', 'LocationController@destroy');
	Route::get('room/delete/{room}', 'RoomController@destroy');

	

	Route::get('search/teacher/{name}', 'SearchController@teacher');
	Route::get('search/subject/{name}', 'SearchController@subject');
	Route::get('search/student/{name}', 'SearchController@student');
	Route::get('search/location/{name}', 'SearchController@location');

	Route::group(['prefix' => 'export'], function() {
		Route::get('student', 'StudentController@export')->name('export.student');
		Route::get('user', 'UserController@export')->name('export.user');
		Route::get('teacher', 'TeacherController@export')->name('export.teacher');
		Route::get('subject', 'SubjectController@export')->name('export.subject');
		Route::get('location', 'LocationController@export')->name('export.location');
		Route::get('room', 'RoomController@export')->name('export.room');
	});

});


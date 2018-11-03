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

/*Route::get('/', function () {
	return view('pages.home');
});

Route::get('login', function () {
	return view('pages.home');
})->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('user/profile', function () {
        // Uses first & second Middleware
    });
});
Route::resource('member','MemberController');*/

Route::get('/', function(){
	return view('welcome');
});

Route::get('flot', function(){
	return view('pages.flot');
});

Route::get('morris', function(){
	return view('pages.morris');
});


Route::namespace('admin')
	->prefix('admin')
	->name('admin.')
	->group(function(){
	Route::get('/', function(){
		return view('admin.pages.morris');
	})->name('home');
	Route::get('flot', function(){
		return view('admin.pages.home');
	})->name('flot');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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

// home page Routes
Route::get('/','WebsiteController@index');
Route::get('/about','WebsiteController@about');
Route::get('/faqs','WebsiteController@faqs');
Route::get('/courses','WebsiteController@courses');
Route::get('/course_data/{id}','WebsiteController@course_data');
Route::get('/contact','WebsiteController@contact');
Route::post('/contact','WebsiteController@sendMessage');
// login and register
Route::get('/login','WebsiteController@login');
Route::post('/login','WebsiteController@logged');
Route::get('/signup','WebsiteController@signup');
Route::post('/signup','WebsiteController@signdone');
// forget password
Route::get('/forget_password','WebsiteController@forget_password');
Route::post('/forget_password','WebsiteController@forget_message');
Route::get('/confirm','WebsiteController@confirm_code');
Route::post('/confirm','WebsiteController@check_code');
Route::get('/new_password','WebsiteController@new_password');
Route::post('/new_password','WebsiteController@password_reset');


// Dashboard Routes
Route::get('/profile','DashboardController@profile');
Route::get('/assignment','DashboardController@assignment');
Route::get('/user_courses','DashboardController@user_courses');
Route::get('/attendance','DashboardController@attendance');
Route::get('/settings','DashboardController@settings');

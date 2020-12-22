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
// Trainee Routes
Route::get('/user_courses','DashboardController@user_courses');
Route::get('/courses','DashboardController@courses');
Route::get('/register_course/{id}','DashboardController@register_course');
Route::get('/assignment','DashboardController@assignment');
Route::get('/attendance','DashboardController@attendance');
//trainer Routes
Route::get('/trainer_assignment','DashboardController@trainer_assignment');
Route::post('/trainer_assignment','DashboardController@trainer_assignment_create');
Route::get('/trainer_attendance','DashboardController@trainer_attendance');
Route::post('/trainer_attendance','DashboardController@trainer_attendance_create');

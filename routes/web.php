<?php
use Illuminate\Support\Facades\Route;

Route::get('/','Frontend\HomeController@index')->name('user.home');
Route::get('/user/login','Frontend\Auth\AuthController@loginForm')->name('user.login.form');

Route::get('/user/register','Frontend\Auth\AuthController@regForm')->name('user.registration');
Route::get('/user/profile','Frontend\Auth\AuthController@profile')->name('user.profile');
Route::post('/user/register/submit','Frontend\Auth\AuthController@register')->name('user.register');
Route::get('/user/otp','Frontend\Auth\AuthController@otpForm')->name('user.otp');

Route::post('/user/login','Frontend\Auth\AuthController@login')->name('user.login');
Route::get('/user/logout','Frontend\Auth\AuthController@logout')->name('user.logout');
Route::get('/user/dashboard','Frontend\UserController@dashboard')->name('user.dashboard');
Route::get('/user/enroll-courses','Frontend\UserController@enroll_course')->name('user.enroll.course');
Route::get('/user/purchase-history','Frontend\PurchaseController@purchase_history')->name('user.purchase.history');
Route::get('/user/purchase-form','Frontend\PurchaseController@purchase_form')->name('user.purchase.form');
Route::post('/user/send/purchase-request','Frontend\PurchaseController@purchase_request')->name('user.purchase.request');
Route::get('/user/settings','Frontend\UserController@settings')->name('user.settings');
Route::get('/user/profile','Frontend\UserController@profile')->name('user.profile');
Route::get('/user/reviews','Frontend\UserController@reviews')->name('user.reviews');

Route::get('get/permission-data', 'Frontend\PurchaseController@get_permission_data')->name('get.permission.data');





Route::get('/detailsmenu/{sub_id}','Frontend\HomeController@detail_menu')->name('subject_details');
Route::get('/course-list','Frontend\CourseController@courses')->name('course.list');
Route::get('/course-details/{course_id}','Frontend\CourseController@course_details')->name('course.details');
Route::get('/course-view/{course_id}','Frontend\CourseController@course_view')->name('course.view');
Route::get('/sub-cat-details/{type}/{id}','Frontend\HomeController@chapter')->name('get-subcat-details');
Route::get('/topic-files/{topic_id}','Frontend\HomeController@topic_files')->name('topic.files');
Route::get('/topical-deatils/{topical_id}','Frontend\HomeController@topical_details')->name('topical.details');
Route::get('/pastpaper-deatils/{paper_id}','Frontend\HomeController@paper_details')->name('pastpaper.details');
Route::get('/topical-files/{chapter_id}','Frontend\HomeController@topical_details')->name('topical.files');
Route::get('/pastpaper-files/{chapter_id}','Frontend\HomeController@pastpaper_details')->name('pastpaper.files');
Route::get('/resource/syllabus/{id}','Frontend\HomeController@resource_syllabus')->name('resource.syllabus');
Route::get('/resource/folder/{id}','Frontend\HomeController@resource_folder')->name('resource.folders');
Route::get('/pdf/download/{tablename}/{id}','Frontend\HomeController@pdf_download')->name('pdf.download');

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {

	Route::get('/', 'Controller@showIndex');
	Route::get('/dashboard', 'Controller@showDashboard');
	Route::get('/profile', 'Controller@showProfile');
	Route::get('/my-courses', 'Controller@myCourses');
	Route::get('/my-messages', 'Controller@myMessages');
	Route::get('/blog-post', 'Controller@showBlogPost');
	Route::get('/blog', 'Controller@showBlog');
	Route::get('/contact', 'Controller@showContact');
	Route::get('/course-forum-thread', 'Controller@showCourseForumThread');
	Route::get('/course-forums', 'Controller@showCourseForums');
	Route::get('/forum-category', 'Controller@showForumCategory');
	Route::get('/course', 'Controller@showCourse');
	Route::get('/forum-thread', 'Controller@showForumThread');
	Route::get('/forum', 'Controller@showForum');
	Route::get('/directory', 'Controller@showDirectory');
	Route::get('/show-course/{course_id}', 'Controller@showShowCourse');


	Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);



	Route::get('/sign-up', 'Controller@showSignUp');
	Route::get('/main-login', 'Controller@showLogin');

	Route::get('/edit-course', 'Controller@showEditCourse');
	Route::get('/instructor-courses', 'Controller@showInstCourses');
	Route::get('/instructor-profile', 'Controller@showInstProfile');
	Route::get('/instructor-dashboard', 'Controller@showInstDashboard');
	Route::get('/instructor-messages', 'Controller@showInstMessages');
	Route::get('/instructor-statement', 'Controller@showInstStatement');


});

Route::get('login', 'Controller@getLogin');
Route::get('register', 'Controller@getRegister');
Route::post('register', 'Controller@postRegister');


Route::get('admin/dashboard', 'AdminController@getDashboard');
Route::post('admin/dashboard', 'Controller@postLogin');

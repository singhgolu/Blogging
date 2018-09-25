<?php

/* USER ROUTES*/

Route::group(['namespace' => 'User'], function(){
	Route::get('/', 'HomeController@index');
	Route::get('post/{post}', 'PostController@post')->name('post');
	Route::get('post/tag/{tag}', 'HomeController@tag')->name('tag');
	Route::get('post/category/{category}', 'HomeController@category')->name('category');
});





/* ADMIN ROUTES*/

Route::group(['namespace' => 'Admin'], function(){
	Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('admin/login', 'Auth\LoginController@login');
	Route::get('admin/home', 'HomeController@index')->name('admin.home');
	Route::resource('admin/post', 'PostController');
	Route::resource('admin/role', 'RoleController');
	Route::resource('admin/tag', 'TagController');
	Route::resource('admin/category', 'CategoryController');
	Route::resource('admin/user', 'UserController');
	Route::resource('admin/permission', 'PermissionController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

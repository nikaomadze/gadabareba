<?php

Auth::routes();

Route::middleware(['admin'])->group(function(){
	Route::get('home', 'AdminController@index');
	Route::prefix('admin')->group(function(){
		Route::get('create', 'AdminController@create')->name('create');
		Route::post('save', 'AdminController@save')->name('save');
		Route::get('create/category', 'AdminController@create_category')->name('create_category');
		Route::post('save/category', "AdminController@save_category")->name('save_category');
	});
});

Route::middleware(['guest'])->group(function(){
	Route::get('/', 'GuestController@index');
	Route::get('guest/show/{id}', 'GuestController@show_single_page')->name('showSinglePage');
});

Route::middleware(['auth'])->group(function(){
	Route::prefix('user/')->group(function(){
		Route::get('home', 'UserController@index')->name('userHome');
		Route::get('show/single/page/{id}', 'UserController@show_single_page')->name('userShow');
		Route::post('save/comment', 'UserController@save_comment')->name('saveComment');
		Route::get('like/{id}', 'UserController@like')->name('like');
	});
});

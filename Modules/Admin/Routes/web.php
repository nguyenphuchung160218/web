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

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.home');

    Route::prefix('diem')->group(function() {
    	Route::get('/', 'DiemController@index')->name('get.diem');
    	Route::get('/create', 'DiemController@create')->name('get.diem.create');
    	Route::post('/create', 'DiemController@store');
    	Route::get('/update/{id}', 'DiemController@edit')->name('get.diem.update');
	});
	Route::group(['prefix' => 'lop'],function (){
       Route::get('/','AdminClassController@index')->name('admin.get.list.class');
       Route::get('/create','AdminClassController@create')->name('admin.get.create.class');
       Route::post('/create','AdminClassController@store');
       Route::get('/update/{id}','AdminClassController@edit')->name('admin.get.edit.class');
       Route::post('/update/{id}','AdminClassController@update');
       Route::get('/{action}/{id}','AdminClassController@action')->name('admin.get.action.class');

    });
     Route::group(['prefix' => 'tuan'],function (){
       Route::get('/','AdminWeekController@index')->name('admin.get.list.week');
       Route::get('/create','AdminWeekController@create')->name('admin.get.create.week');
       Route::post('/create','AdminWeekController@store');
       Route::get('/update/{id}','AdminWeekController@edit')->name('admin.get.edit.week');
       Route::post('/update/{id}','AdminWeekController@update');
       Route::get('/{action}/{id}','AdminWeekController@action')->name('admin.get.action.week');

    });


});


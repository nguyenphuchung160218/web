<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\Controller@index')->name('home');

//auth
Route::group(['namespace'=>''],function (){
    Route::get('dang-ky','App\Http\Controllers\Auth\RegisterController@getRegister')->name('get.register');
    Route::post('dang-ky','App\Http\Controllers\Auth\RegisterController@postRegister')->name('post.register');
    Route::get('dang-nhap','App\Http\Controllers\Auth\LoginController@getLogin')->name('get.login');
    Route::post('dang-nhap','App\Http\Controllers\Auth\LoginController@postLogin')->name('post.login');
    Route::get('dang-xuat','App\Http\Controllers\Auth\LoginController@getLogout')->name('get.logout');  
});

//user
Route::get('tai-khoan','App\Http\Controllers\UserController@getUser')->name('get.user');


//article
Route::get('bai-viet','App\Http\Controllers\ArticleController@getArticle')->name('get.list.article');
Route::get('bai-viet/{slug}','App\Http\Controllers\ArticleController@getDetail')->name('get.detail.article');

//info
// Route::get('lien-he','ContactController@getContact')->name('get.contact');
// Route::post('lien-he','ContactController@saveContact');
Route::view('/lien-he', 'info.contact')->name('get.contact');
Route::view('/ve-chung-toi', 'info.aboutUs')->name('get.aboutUs');


//rating
Route::group(['prefix'=>'rating'],function (){
    Route::post('/danh-gia/{id}','App\Http\Controllers\RatingController@saveRating')->name('save.form.rating');
});
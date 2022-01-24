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

Route::get('/','App\Http\Controllers\HomeController@index')->name('home');

Auth::routes();
Route::prefix('admin')->middleware('checkrole')->group(function (){
    Route::get('/', 'App\Http\Controllers\back\AdminController@index')->name('admin.index');
    Route::get('/users', 'App\Http\Controllers\back\UserController@index')->name('admin.users');
    Route::get('/profile/{user}', 'App\Http\Controllers\back\UserController@edit')->name('admin.profile');
    Route::post('/userupdate/{user}', 'App\Http\Controllers\back\UserController@update')->name('admin.profileupdate');
    Route::get('/user/delete/{user}', 'App\Http\Controllers\back\UserController@destroy')->name('admin.user.delete');
    Route::get('/user/status/{user}', 'App\Http\Controllers\back\UserController@updatestatus')->name('admin.user.status');
});

Route::prefix('admin/categories')->middleware('checkrole')->group(function (){
    Route::get('/', 'App\Http\Controllers\back\CategoryController@index')->name('admin.categories');
    Route::get('/create', 'App\Http\Controllers\back\CategoryController@create')->name('admin.categories.create');
    Route::post('/store', 'App\Http\Controllers\back\CategoryController@store')->name('admin.categories.store');
    Route::get('/edit/{category}', 'App\Http\Controllers\back\CategoryController@edit')->name('admin.categories.edit');
    Route::post('/update/{category}', 'App\Http\Controllers\back\CategoryController@update')->name('admin.categories.update');
    Route::get('/destroy/{category}', 'App\Http\Controllers\back\CategoryController@destroy')->name('admin.categories.destroy');
});


Route::prefix('admin/articles')->middleware('checkrole')->group(function (){
    Route::get('/', 'App\Http\Controllers\back\ArticleController@index')->name('admin.articles');
    Route::get('/create', 'App\Http\Controllers\back\ArticleController@create')->name('admin.articles.create');
    Route::post('/store', 'App\Http\Controllers\back\ArticleController@store')->name('admin.articles.store');
    Route::get('/edit/{article}', 'App\Http\Controllers\back\ArticleController@edit')->name('admin.articles.edit');
    Route::post('/update/{article}', 'App\Http\Controllers\back\ArticleController@update')->name('admin.articles.update');
    Route::get('/destroy/{article}', 'App\Http\Controllers\back\ArticleController@destroy')->name('admin.articles.destroy');
    Route::get('/status/{article}', 'App\Http\Controllers\back\ArticleController@updatestatus')->name('admin.articles.status');
});
Route::prefix('admin/comments')->middleware('checkrole')->group(function (){
    Route::get('/', 'App\Http\Controllers\back\CommentController@index')->name('admin.comments');
    Route::get('/edit/{comment}', 'App\Http\Controllers\back\CommentController@edit')->name('admin.comments.edit');
    Route::post('/update/{comment}', 'App\Http\Controllers\back\CommentController@update')->name('admin.comments.update');
    Route::get('/destroy/{comment}', 'App\Http\Controllers\back\CommentController@destroy')->name('admin.comments.destroy');
    Route::get('/status/{comment}', 'App\Http\Controllers\back\CommentController@updatestatus')->name('admin.comments.status');
});


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/profile/{user}', 'App\Http\Controllers\UserController@edit')->name('profile');
Route::post('/update/{user}', 'App\Http\Controllers\UserController@update')->name('profileupdate');
Route::get('/articles', 'App\Http\Controllers\front\ArticleController@index')->name('articles');
Route::get('/article/{article}', 'App\Http\Controllers\front\ArticleController@show')->name('article');
Route::post('/comment/{article}', 'App\Http\Controllers\front\CommentController@store')->name('comment.store');
Route::post('/store', 'App\Http\Controllers\front\ConcatController@store')->name('concat.store');


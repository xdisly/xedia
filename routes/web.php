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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/blog', 'HomeController@blog')->name('home.blog');
Route::get('/blog/{slug}', 'HomeController@post')->name('home.post');
Route::get('/blog/category/{slug}', 'HomeController@category')->name('home.category');
Route::get('/blog/tag/{slug}', 'HomeController@tag')->name('home.tag');

Route::get('/search', 'HomeController@search')->name('search.index');
Route::get('/searching', 'SearchController@index')->name('search.searching');

Route::match(['GET','POST'], '/contacts', 'ContactController@send')->name('home.contacts');

Route::get('/projects', 'HomeController@projects')->name('home.projects');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function () {
    Route::get('/', 'MainController@index')->name('admin.index');
    Route::resource('/categories', 'CategoryController');
    Route::resource('/tags', 'TagController');
    Route::resource('/posts', 'PostController');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', 'UserController@create')->name('register.create');
    Route::post('/register', 'UserController@store')->name('register.store');
    Route::get('/login', 'UserController@loginForm')->name('login.create');
    Route::post('/login', 'UserController@login')->name('login');
});

Route::get('/logout', 'UserController@logout')->name('logout')->middleware('auth');

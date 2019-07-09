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

Route::get('/', 'IndexController@index');
Route::get('/about', 'IndexController@about');

Route::get('/blog', 'IndexController@blog');


Auth::routes();


Route::get('home', 'HomeController@index')->name('home');
Route::post('/style-update/{id}', 'HomeController@styleUpdate')->name('style.update');

Route::middleware(['auth'])->group(function () {
// EditSections
//Section1
Route::get('/editsection1/{id}', 'HomeController@section1Edit')->name('section1.edit');
Route::post('/updatesection1/{id}', 'HomeController@section1Update')->name('section1.update');
Route::post('/displaysection1/{id}', 'HomeController@section1Display')->name('section1.display');
Route::post('/carouselsection1/{id}', 'HomeController@section1Carousel')->name('section1.carousel');
//Section2
Route::get('/editsection2/{id}', 'HomeController@section2Edit')->name('section2.edit');
Route::post('/updatesection2/{id}', 'HomeController@section2Update')->name('section2.update');
Route::post('/displaysection2/{id}', 'HomeController@section2Display')->name('section2.display');
//Section3
Route::get('/editsection3/{id}', 'HomeController@section3Edit')->name('section3.edit');
Route::post('/updatesection3/{id}', 'HomeController@section3Update')->name('section3.update');
Route::post('/displaysection3/{id}', 'HomeController@section3Display')->name('section3.display');
//Section4
Route::get('/editsection4/{id}', 'HomeController@section4Edit')->name('section4.edit');
Route::post('/updatesection4/{id}', 'HomeController@section4Update')->name('section4.update');
Route::post('/displaysection4/{id}', 'HomeController@section4Display')->name('section4.display');
//Section5
Route::get('/editsection5/{id}', 'HomeController@section5Edit')->name('section5.edit');
Route::post('/updatesection5/{id}', 'HomeController@section5Update')->name('section5.update');
Route::post('/displaysection5/{id}', 'HomeController@section5Display')->name('section5.display');
//Section Footer
Route::get('/editsectionFooter/{id}', 'HomeController@sectionFooterEdit')->name('sectionFooter.edit');
Route::post('/updatesectionFooter/{id}', 'HomeController@sectionFooterUpdate')->name('sectionFooter.update');
Route::post('/displaysectionFooter/{id}', 'HomeController@sectionFooterDisplay')->name('sectionFooter.display');
//Abut Page
Route::get('/edit-about/{id}', 'HomeController@aboutEdit')->name('about.edit');
Route::post('/update-about/{id}', 'HomeController@aboutUpdate')->name('about.update');

// Posts functionality
Route::resource('categories', 'CategoriesController');
Route::resource('tags', 'TagsController');
Route::resource('posts', 'PostController');
Route::get('trashed-posts', 'PostController@trashed')->name('trashed-posts.index');
Route::put('restore-posts/{post}', 'PostController@restore')->name('restore-posts');
Route::get('users/profile', 'UsersController@edit')->name('users.edit-profile');
Route::put('users/profile', 'UsersController@update')->name('users.update-profile');
Route::post('logout-reset', 'UsersController@logoutReset')->name('logout.reset');
Route::get('password-redirect', 'UsersController@passwordRedirect')->name('password.redirect');

// Servicios functionality
Route::resource('servicios', 'ServicioController');
Route::get('trashed-servicios', 'ServicioController@trashed')->name('trashed-servicios.index');
Route::put('restore-servicios/{servicio}', 'ServicioController@restore')->name('restore-servicios');

});

Route::middleware(['auth','admin'])->group(function() {
  Route::get('users', 'UsersController@index')->name('users.index');
  Route::post('users/{user}/make-admin', 'UsersController@makeAdmin')->name('users.make-admin');
});

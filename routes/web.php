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

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::group(['prefix' => 'services'], function () {
    Route::get('/', 'ServiceController@index')->name('services');
    Route::get('/event/{id}', 'BlogController@index')->name('service.event');   
    Route::get('/massage', 'BlogController@index')->name('service.massage');   
    Route::get('/book', 'BlogController@index')->name('service.book');   

});

Route::group(['prefix' => 'pricing'], function () {
    Route::get('/', 'BlogController@index')->name('pricing');
    Route::get('/calculator', 'BlogController@index')->name('pricing.calculator');   
    Route::get('/massage', 'BlogController@index')->name('pricing.massage');   
    Route::get('/employe-roi', 'BlogController@index')->name('pricing.roi');   

});

Route::group(['prefix' => 'blog'], function () {
    Route::get('/', 'BlogController@index')->name('blog');
    Route::get('/{post}', ['uses' =>'BlogController@show'])->name('post');
    // Route::resource('posts', 'BlogController')->only('show');
    // Route::resource('users', 'UserController')->only('show');   
});

Route::get('/about', 'PageController@about')->name('about');   
Route::get('/contact', 'BlogController@index')->name('contact');   
Route::get('/testimonials', 'PageController@testimonials')->name('testimonials'); 
Route::get('/login', 'PageController@login')->name('login');   

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

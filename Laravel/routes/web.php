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

/*Route::get('/', function () {
    return view('welcome');   
});
*/
/*Route::get('/hello', function () {
    //return view('welcome');
    return 'Hello World';
});
*/
/*Route::get('/users/{id}/{name}', function($id, $name) {
    return 'This is the id of '.$name.' and the id is '.$id;
});
*/
Route::get('/index', function() {
    return view('pages.index');
});
Route::get('/reviews', function() {
    return view('pages.reviews');
});
Route::post('/userReview', function() {
    return view('pages.userReview');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/userReview', 'userReviewController@index');
Route::post('/userReview', 'userReviewController@save');
Route::get('/allreviews', 'userReviewController@show');

Route::get('/index', 'RatingsController@store_pro');


//Route::post('/userReview','Auth\UserReviewController@userReview')->name('auth.userReview');


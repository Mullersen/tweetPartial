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

use App\Http\Controllers\TweetController;

Route::get('/', 'TweetController@index');
Route::get('/{tweetId}', 'TweetController@showTweet');//whatever the user types in the placeholder{} is returned to the controller as a variable (in this case $id)
Route::post('/', 'TweetController@addTweet');
Route::post('/deletePost', 'TweetController@deleteTweet');
Route::post('/editPost', 'TweetController@editTweet');
Route::post('/{tweetId}', 'TweetController@saveTweet');

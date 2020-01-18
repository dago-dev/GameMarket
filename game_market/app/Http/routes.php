<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web']], function () {
    Route::auth();
    Route::get('/','TweetsController@index');
    Route::get('/tweets', 'TweetsController@index');
    Route::get('/tweets/contact' ,'TweetsController@contact');
    Route::get('/tweets/create','TweetsController@create');
    Route::post('/tweets','TweetsController@store');
    Route::get('/tweets.serch','TweetsController@serch');
    Route::get('/{product}','TweetsController@show');
    Route::get('/categories/category','CategoriesController@category');
    Route::get('/category/{category}', 'CategoriesController@show'); //{}中身の記述はなんでもいいがわかりやすいものにする

});

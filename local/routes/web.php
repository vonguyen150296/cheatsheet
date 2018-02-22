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
Route::get('/','PageController@index');
Route::get('articles',[
	'as' => 'articles',
	'uses' => 'ArticlesController@index'
]);

Route::get('login',function(){

	return view('login');
});

Route::get('/redirect/{social}', 'SocialAuthController@redirect');
Route::get('/callback/{social}', 'SocialAuthController@callback');
Route::get('articles/create',[
	'as' => 'create',
	'uses' => 'PageController@create'
]);
Route::get('articles',[
	'as' => 'articles.index',
	'uses' => 'ArticlesController@index'
]);
Route::post('articles', [
	'as' => 'article.store',
	'uses' => 'ArticlesController@store'
]);
Route::get('articles/{id}/edit',[
	'as' => 'article.edit',
	'uses' => 'ArticlesController@edit'
]);
Route::put('articles/{id}',[
	'as' => 'articles.update',
	'uses' => 'ArticlesController@update'
]);
Route::delete('articles/{id}',[
	'as' => 'article.destroy',
	'uses' => 'ArticlesController@destroy'
]);
Route::get('articles/{id}',[
	'as' => 'article.show',
	'uses' => 'ArticlesController@show'
]);




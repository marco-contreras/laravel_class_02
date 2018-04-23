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

Route::get('/', ['as' => 'welcome', 'uses' => 'PagesController@welcomeHandler'])->middleware('access');

Route::get('/color/blue', ['as' => 'blue', 'uses' => 'PagesController@blueHandler']);

Route::get('/color/red', ['as' => 'red', 'uses' => 'PagesController@redHandler']);

Route::get('/color/yellow', ['as' => 'yellow', 'uses' => 'PagesController@yellowHandler']);

Route::get('/color/green', ['as' => 'green', 'uses' => 'PagesController@greenHandler']);

Route::get('/color/violet', ['as' => 'violet', 'uses' => 'PagesController@violetHandler']);

Route::get('/blur/{color?}', ['as' => 'blur', 'uses' => 'PagesController@blurHandler']);


Route::get('/contact', ['as' => 'contact', 'uses' => 'PagesController@contactHandler']);

Route::post('/message', ['as' => 'message', 'uses' => 'PagesController@messageHandler']);

Route::resource('messages', 'MessagesController');

/*
Route::get('messages',            ['as' => 'messages.index',    'uses' => 'MessagesController@index']);
Route::get('messages/create',     ['as' => 'messages.create',   'uses' => 'MessagesController@create']);
Route::post('messages',           ['as' => 'messages.store',    'uses' => 'MessagesController@store']);
Route::get('messages/{id}',       ['as' => 'messages.show',     'uses' => 'MessagesController@show']);
Route::get('messages/{id}/edit',  ['as' => 'messages.edit',     'uses' => 'MessagesController@edit']);
Route::put('messages/{id}',       ['as' => 'messages.update',   'uses' => 'MessagesController@update']);
Route::delete('messages/{id}',    ['as' => 'messages.destroy',  'uses' => 'MessagesController@destroy']);
*/
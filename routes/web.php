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
Route::get('createUserTest', function () {
    $user = new \App\User();
    $user->name = 'Marco Contreras';
    $user->email = 'marco.contreras@gmail.com';
    $user->password = bcrypt('123123');
    $user->save();

    return $user;
});


Route::get('/', ['as' => 'welcome', 'uses' => 'PagesController@welcomeHandler'])->middleware('access');
Route::get('home', ['as' => 'home', 'uses' => 'PagesController@homeHandler'])->middleware('access');

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

Route::get('login', 'Auth\LoginController@showLoginForm');

//Route::post('login', 'Auth\LoginController@login');

Route::post('login', ['as' => 'login', 'uses' => 'Auth\LoginController@login']);
Route::get('logout', 'Auth\LoginController@logout');

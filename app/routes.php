<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//get data

Route::model('articles','Articles');

Route::get('/', array('as' =>'article', 'uses'=>'ArticlesController@index'));

Route::get('/create', 'ArticlesController@create');

Route::get('/edit/{id}', array('as'=>'edit','uses'=>'ArticlesController@edit'));

Route::get('/delete/{id}', array('as'=>'delete', 'uses'=> 'ArticlesController@delete'));



// post data

Route::post('/create', array('as'=>'create','uses'=>'ArticlesController@handleCreate'));

Route::post('/edit/{id}', array('as'=>'edit','uses'=>'ArticlesController@handleEdit'));



Route::post('/delete/{id}', array('as'=>'delete','uses'=>'ArticlesController@handleDelete'));


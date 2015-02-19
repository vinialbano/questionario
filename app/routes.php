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

/** ------------------------------------------
*  	Route model binding
*  	------------------------------------------
*/
Route::model('user', 'User');
Route::model('comment', 'Comment');
Route::model('question', 'Question');
Route::model('answer', 'Answer');
Route::model('role', 'Role');

/** ------------------------------------------
* 	Route constraint patterns
*  	------------------------------------------
*/
Route::pattern('comment', '[0-9]+');
Route::pattern('question', '[0-9]+');
Route::pattern('user', '[0-9]+');
Route::pattern('answer', '[0-9]+');
Route::pattern('token', '[0-9a-z]+');

/** ------------------------------------------
*  	Admin Routes
*	------------------------------------------
*/
Route::group(array('prefix' => 'admin', 'before' => 'auth', 'namespace' => 'Admin'), function()
{
	# Answer Management
	Route::group(array('prefix' => 'answers'), function(){
		Route::get('/',	array('uses' => 'AnswersController@index',	'as' => 'admin.answers.index'));
	});

	# Comment Management
	Route::group(array('prefix' => 'comments'), function(){
		Route::get('/',	array('uses' => 'CommentsController@index',	'as' => 'admin.comments.index'));
	});

	# Question Management
	Route::group(array('prefix' => 'questions'), function(){
		Route::get('/', 				array('uses' => 'QuestionsController@index',	'as' => 'admin.questions.index'));
		Route::get('{question}/edit',	array('uses' => 'QuestionsController@edit', 	'as' => 'admin.questions.edit'));
		Route::put('{question}', 		array('uses' => 'QuestionsController@update', 	'as' => 'admin.questions.update'));
		Route::get('/data', 			array('uses' => 'QuestionsController@getData',	'as' => 'admin.questions.data'));
	});

	# Admin Dashboard
	Route::get('/',	array('uses' => 'DashboardController@index',	'as' => 'admin.dashboard.index'));

	Route::controller('comments', 'CommentsController');

});


# Comments
Route::group(array('prefix' => 'comments'), function(){
	Route::get('/create', array('uses' => 'CommentsController@create', 'as' => 'comments.create'));
	Route::post('/', array('uses' => 'CommentsController@store', 'as' => 'comments.store'));
});

# Answers
Route::group(array('prefix' => 'answers'), function(){
	Route::post('/', array('uses' => 'AnswersController@store', 'as' => 'answers.store'));
});

# Alternatives
Route::group(array('prefix' => 'alternatives'), function(){
	Route::post('/', array('uses' => 'AlternativesController@firstOrNew', 'as' => 'alternatives.firstOrNew'));
});

# Questions
Route::group(array('prefix' => 'questions'), function(){
	Route::get('/', 					array('uses' => 'QuestionsController@index',	'as' => 'questions.index'));
	Route::get('{question}/show', 		array('uses' => 'QuestionsController@show', 	'as' => 'questions.show'));
	Route::get('/modal', 				array('uses' => 'QuestionsController@getModal', 'as' => 'questions.modal'));
});

# Home
Route::get('/', array('uses' => 'HomeController@index', 'as' => 'index'));
Route::get('/apresentacao', array('uses' => 'HomeController@apresentacao', 'as' => 'apresentacao'));
Route::get('/finalizacao', array('uses' => 'HomeController@finalizacao', 'as' => 'finalizacao'));
//

Route::controller( 'users', 'UsersController');

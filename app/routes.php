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
	# Comment Management
	Route::group(array('prefix' => 'comments'), function(){
		Route::get('/', 				array('uses' => 'CommentsController@index',		'as' => 'admin.comments.index'));
	});
	Route::controller('comments', 'CommentsController');

	# Question Management
	Route::group(array('prefix' => 'questions'), function(){
		Route::get('/', 					array('uses' => 'QuestionsController@index',	'as' => 'admin.questions.index'));
		Route::get('{question}/edit', 		array('uses' => 'QuestionsController@edit', 	'as' => 'admin.questions.edit'));
		Route::put('{question}', 			array('uses' => 'QuestionsController@update', 	'as' => 'admin.questions.update'));
		Route::get('/data', 				array('uses' => 'QuestionsController@getData', 	'as' => 'admin.questions.data'));
	});
	Route::controller('questions', 'QuestionsController');


	# Answer Management
	Route::group(array('prefix' => 'answers'), function(){
		Route::get('/', 				array('uses' => 'AnswersController@index',		'as' => 'admin.answers.index'));
		Route::get('/create', 			array('uses' => 'AnswersController@create',		'as' => 'admin.answers.create'));
		Route::post('/', 				array('uses' => 'AnswersController@store', 		'as' => 'admin.answers.store'));
		Route::get('{answer}/edit', 	array('uses' => 'AnswersController@edit', 		'as' => 'admin.answers.edit'));
		Route::put('{answer}', 			array('uses' => 'AnswersController@update', 	'as' => 'admin.answers.update'));
		Route::get('{answer}/destroy', 	array('uses' => 'AnswersController@destroy', 	'as' => 'admin.answers.destroy'));
		Route::get('/data', 			array('uses' => 'AnswersController@getData', 	'as' => 'admin.answers.data'));
	});
	Route::controller('answers', 'AnswersController');

	# Admin Dashboard
	Route::get('/', 				array('uses' => 'DashboardController@index',		'as' => 'admin.dashboard.index'));

	Route::controller('comments', 'CommentsController');

});

/** ------------------------------------------
* 	Guest Routes
*	------------------------------------------
*/
Route::group(array('before' => 'guest'), function()
{
	# Comments
	Route::resource('comments', 'CommentsController', array('only' => array('create', 'store')));

	# Answer
	Route::resource('answers', 'AnswersController', array('only' => array('create', 'store')));

	# Question Management
	Route::group(array('prefix' => 'questions'), function(){
		Route::get('/', 					array('uses' => 'QuestionsController@index',	'as' => 'questions.index'));
		Route::get('{question}/show', 		array('uses' => 'QuestionsController@show', 	'as' => 'questions.show'));
		Route::put('{question}', 			array('uses' => 'QuestionsController@update', 	'as' => 'questions.update'));
		Route::get('/modal', 				array('uses' => 'QuestionsController@getModal', 'as' => 'questions.modal'));
	});
	Route::controller('questions', 'QuestionsController');

});

/** -------------------------------------------
* 	General Routes
*	-------------------------------------------
*/

# Home
Route::get('/', 'HomeController@getIndex');
//

// Confide RESTful route
Route::get('users/confirm/{code}', 'UsersController@getConfirm');
Route::get('users/reset_password/{token}', 'UsersController@getReset');
Route::get('users/reset_password', 'UsersController@postReset');
Route::controller( 'users', 'UsersController');

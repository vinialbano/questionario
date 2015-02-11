<?php namespace Admin;

use BaseController;
use Question;
use Lang;
use View;
use Datatables;
use Input;
use Redirect;

class QuestionsController extends BaseController {

	protected $model;

	public function __construct(Question $question)
	{
		parent::__construct();
		$this->model = $question;
	}

	/**
	* Display a listing of the resource.
	*
	* @return Response
	*/
	public function index()
	{
		// Title
		$title = Lang::get('admin/questions/title.question_management');

		return View::make('questions.index', compact('title'));
	}

	/**
	* Show the form for editing the specified resource.
	*
	* @param  int  $question
	* @return Response
	*/
	public function edit($question)
	{
		if(Request::ajax()) {
			// Title
			$title = Lang::get('admin/questions/title.update_question');

			// Show the page
			return View::make('layouts/admin/modal', compact('question', 'title'));
		}
		return Redirect::to('/');
	}

	/**
	* Update the specified resource in storage.
	*
	* @param  int  $question
	* @return Response
	*/
	public function update($question)
	{
		//Update
		$question->text       = Input::get('text');
		$question->display_text = Input::get('display_text');
		$question->multianswer    = Input::has('multianswer') ? true : false;

		// Was the question updated?
		if($question->save())
		{
			// Redirect to the new question page
			return Redirect::route('admin.questions.index');
		}

		// Redirect to the questions management page
		return Redirect::to('/');
	}

	public function getData()
	{
		$questions = Question::select(array('id', 'text', 'display_text', 'multianswer'));

		return Datatables::of($questions)
		->add_column('actions', '
		<div class="btn-group">
		<a href="{{{ URL::route(\'admin.questions.edit\' , $id ) }}}" class="btn btn-primary btn-xs ajax-popup-link" ><i class="fa fa-pencil"></i> {{{ Lang::get(\'button.edit\') }}}</a>
		</div>
		')
		->edit_column('multianswer', '{{ $multianswer ? "Sim" : "Não" }}')
		->make();
	}


}

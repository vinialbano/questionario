<?php


class QuestionsController extends \BaseController {

	protected $model;

	public function __construct(Question $question){
		parent::__construct();
		$this->model = $question;
	}


	/**
	* Display the specified resource.
	*
	* @param  int  $question
	* @return Response
	*/
	public function show($question)
	{
		$title = "Questão " . $question->id;
		return View::make('questions/show', compact('title' , 'question'));

	}

	public function getModal(){
		return View::make('questions/modal');
	}


}

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
		$previous = $question->getPrevious();
		$questions = Session::get('questions');

		if ($previous != null){
			$top = sizeof($questions) - 1;
			$bottom = 0;
			$achou = false;
			$achou = false;
			while($bottom <= $top)
			{
				if(in_array($previous->id, $questions[$bottom])) {
					$achou = true;
					break;
				}
				$bottom++;
			}
		}

		if($previous == null || $achou){
			$title = "Questão " . $question->id;
			return View::make('questions/show', compact('title' , 'question'));
		}
		return Redirect::route('questions.show', $previous->id);

	}

	public function getModal(){
		return View::make('questions/modal');
	}


}

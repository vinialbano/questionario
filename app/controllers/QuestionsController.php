<?php


class QuestionsController extends \BaseController {

	protected $model;

	public function __construct(Question $question){
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
		//
	}


	/**
	* Show the form for creating a new resource.
	*
	* @return Response
	*/
	public function create()
	{
		//
	}


	/**
	* Store a newly created resource in storage.
	*
	* @return Response
	*/
	public function store()
	{
		//
	}


	/**
	* Display the specified resource.
	*
	* @param  int  $question
	* @return Response
	*/
	public function show($question)
	{
		$title = "Questão";

		return View::make('questions/show', compact('title' , 'question'));
	}


	/**
	* Show the form for editing the specified resource.
	*
	* @param  int  $question
	* @return Response
	*/
	public function edit($question)
	{
		//
	}


	/**
	* Update the specified resource in storage.
	*
	* @param  int  $question
	* @return Response
	*/
	public function update($question)
	{
		//
	}


	/**
	* Remove the specified resource from storage.
	*
	* @param  int  $question
	* @return Response
	*/
	public function destroy($question)
	{
		//
	}

	public function getModal(){
		return View::make('questions/modal');
	}


}

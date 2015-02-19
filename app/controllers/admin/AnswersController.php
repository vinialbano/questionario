<?php namespace Admin;

use BaseController;
use Lang;
use View;

class AnswersController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Title
		$title = Lang::get('admin/answers/title.answer_management');

		return View::make('answers.index', compact('title'));
	}


}

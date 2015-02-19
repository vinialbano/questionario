<?php namespace Admin;

use BaseController;
use Comment;
use Lang;
use Carbon;
use View;

class CommentsController extends BaseController {

	protected $model;

	public function __construct(Comment $comment)
	{
		parent::__construct();
		$this->model = $comment;
	}

	/**
	* Display a listing of the resource.
	*
	* @return Response
	*/
	public function index()
	{
		// Title
		$title = Lang::get('admin/comments/title.comment_management');

		//Comments
		$comments = $this->model->orderBy('updated_at', 'DESC')->get();

		//Dates
		$dates = array();
		setLocale(LC_TIME, 'pt-BR');
		foreach ($comments as $key => $comment){
			$newDate = Carbon::createFromFormat('Y-m-d H:i:s', $comment->updated_at)->formatLocalized('%e %b. %Y');
			if(!in_array($newDate, $dates)){
				array_push($dates, $newDate);
			}
		}

		return View::make('comments.index', compact('comments','dates','title'));
	}




}

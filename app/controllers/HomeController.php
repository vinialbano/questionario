<?php

class HomeController extends BaseController {

	public function index()
	{
		return View::make('index');
	}

	public function apresentacao()
	{
		$title = "Apresentação";
		return View::make('apresentacao', compact('title'));
	}

	public function finalizacao()
	{
		$title = "Fim";
		return View::make('finalizacao', compact('title'));
	}

}

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

	public function getApresentacao($question){
		$texto = "";
		switch($question->id) {
			case 5:
				$texto = "Você está indo se matricular na sua nova escola. Para fazer sua matrícula você deverá responder o questionário com as próximas perguntas.";
				break;
			case 19:
				$texto = "Você está no seu quarto, utilizando o computador. Sua mãe acaba de chegar para conversar.";
				break;
			case 26:
				$texto = "Você foi convidado por um amigo para dar um passeio na praça da cidade. Estão andando juntos e iniciam uma conversa.";
				break;
			case 39:
				$texto = "Você foi para uma festa com seus amigos. Estão todos pensando como animar a noite e surge um assunto que começam a debater.";
				break;
			case 48:
				$texto = "Acompanhado de seus amigos, você sai da festa e se encontra em uma rua aparentemente deserta.";
				break;
			case 53:
				$texto = "Passado alguns dias, vocês foram convidados para uma nova festa. Seus amigos te encontram nela.";
				break;
			case 65:
				$texto = "No dia seguinte, você passou mal e sua mãe o levou ao hospital. O médico deseja lhe fazer algumas perguntas para avaliar seu estado de saúde.";
				break;
		}
		return View::make('questions/apresentacao', compact('texto'));
	}


}

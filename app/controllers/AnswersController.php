<?php

class AnswersController extends BaseController {

	public function store()
	{
		//Pega a questão atual da model
		$questaoAtual = Question::where('id', '=', Input::get('question'))->first();
		$proxima = $questaoAtual->getNext();

		//Pega todas as questões na Session ou cria um novo array
		$questions = Session::has('questions') ? Session::get('questions') : array();

		//Pega as respostas
		$answers = explode(',', Input::get('answers'));

		//Verifica se a questão atual já não possui resposta
		$top = sizeof($questions) - 1;
		$bottom = 0;
		$achou = false;
		while($bottom <= $top)
		{
			if(in_array($questaoAtual->id, $questions[$bottom])) {
				$achou = true;
				break;
			}
			$bottom++;
		}
		//Se possui, substitui
		if ($achou){
			$questions[$bottom] = [Input::get('question'), $answers];
		} else {
			array_push($questions, [Input::get('question'), $answers] );
		}

		//Cria a sessão
		Session::put('questions', $questions);

		//---------------------------------------------------------
		//Redireciona para a próxima pergunta ou salva as respostas
		//---------------------------------------------------------
		if ($proxima != null){
			return Redirect::route('questions.show', $proxima->id);
		}

		//Verifica se o questionário está completo
		$completo = true;
		for ($id = 1; $id <= 77; $id++){

			$top = sizeof($questions) - 1;
			$bottom = 0;
			$achou = false;
			while($bottom <= $top)
			{
				if(in_array($id, $questions[$bottom])) {
					$achou = true;
					break;
				}
				$bottom++;
			}
			if (!$achou){
				$completo = false;
				break;
			}
		}


		//Salva ou envia mensagem de erro
		if ($completo) {
			if (!Session::has('completo')){
				$top = sizeof($questions) - 1;
				$bottom = 0;
				while($bottom <= $top)
				{
					$questionId = $questions[$bottom][0];
					$alternativesIds = $questions[$bottom][1];

					$answer = new Answer();
					$question = Question::find($questionId);
					$answer->question()->associate($question);
					$answer->save();
					$answer->alternatives()->sync($alternativesIds);

					$bottom++;
				}
			}
			Session::put('completo', true);
			return Redirect::route('comments.create');

		} else {
			dd("Questionário incompleto, falta responder a questão " . $id);
		}
	}

}

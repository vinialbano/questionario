<?php

class AnswersController extends BaseController {

	public function store()
	{
		//Pega a questão atual da model
		$questaoAtual = Question::where('id', '=', Input::get('question'))->first();
		$proxima = $questaoAtual->getNext();
		$previous = $questaoAtual;
		//Pega todas as questões na Session ou cria um novo array
		$questions = Session::has('questions') ? Session::get('questions') : array();

		//Pega as respostas
		$answers = explode(',', Input::get('answers'));

		//Verifica a validade da questão dos pais
		if ($questaoAtual->id == 4){
			//Vivem juntos
			if($answers[0] == 35){
				//Tem que ter os dois
				if (in_array(29, $questions[2][1]) && !(in_array(30, $questions[2][1]))) {
					return Redirect::back()->withErrors('Sua resposta é inválida devido ter afirmado teus pais viverem juntos e você só morar com seu pai.');
				}
				if (!(in_array(29, $questions[2][1])) && in_array(30, $questions[2][1])) {
					return Redirect::back()->withErrors('Sua resposta é inválida devido ter afirmado teus pais viverem juntos e você só morar com sua mãe');
				}
			}
			//Vivem separados ou alguém morreu
			if ($answers[0] == 36 || $answers[0] == 37){
				//Tem que ter um só
				if (! in_array(29, $questions[2][1]) xor in_array(30, $questions[2][1])) {
					return Redirect::back()->withErrors('Sua resposta é inválida devido ter afirmado morar com os dos pais.');
				}
			}
		}

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
			if(!$questaoAtual->has_jump){
				$questions[$bottom] = [Input::get('question'), $answers];
			} else {
				if(null != $questaoAtual->alternative()->first() && $questaoAtual->alternative()->first()->id == $answers[0]){
					$jump = $questaoAtual->jumpTo()->first();
					while($questaoAtual != $jump){
						$questions[$bottom] = [$questaoAtual->id, [$questaoAtual->alternative()->first()->id]];
						$bottom++;
						$questaoAtual = $questaoAtual->getNext();
					}
					$proxima = $questaoAtual;
				} else {
					$questions[$bottom] = [Input::get('question'), $answers];
				}
			}
		} else {
			if(!$questaoAtual->has_jump){
				array_push($questions, [Input::get('question'), $answers] );
			} else {
				if(null != $questaoAtual->alternative()->first() && $questaoAtual->alternative()->first()->id == $answers[0]){
					$jump = $questaoAtual->jumpTo()->first();
					while($questaoAtual != $jump){
						array_push($questions, [$questaoAtual->id, [$questaoAtual->alternative()->first()->id]]);
						$questaoAtual = $questaoAtual->getNext();
					}
					$proxima = $questaoAtual;
				} else {
					array_push($questions, [Input::get('question'), $answers] );
				}
			}

		}

		//Cria a sessão
		Session::put('questions', $questions);

		//---------------------------------------------------------
		//Redireciona para a próxima pergunta ou salva as respostas
		//---------------------------------------------------------

		if ($proxima != null){
			Session::put('previous' . $proxima->id, $previous->id);
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

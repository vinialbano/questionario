<?php namespace Admin;

use BaseController;
use Lang;
use View;
use Answer;

class AnswersController extends BaseController {

    protected $model;

    public function __construct(Answer $user)
    {
        parent::__construct();
        $this->model = $user;
    }

    public function exportAnswers(){
        $answers = $this->model->all();
        $quests = \Question::all();
        $questions = array();
        foreach($quests as $quest){
            $question = $quest->text;
            array_push($questions,$question);
        }
        $alternatives = array();
        foreach($answers as $answer){
            $alts = $answer->alternatives;
            $alts2 = "";
            foreach($alts as $alt){
                $alts2 .= $alt->text . ", ";
            }
            $alts2 = rtrim($alts2, ", ");
            array_push($alternatives, $alts2);
        }
        $alternatives = array_chunk($alternatives, 75);
        //dd($alternatives);
        return \Excel::create('Respostas' . \Carbon::now()->formatLocalized('%d-%m-%Y'), function($excel) use($questions, $alternatives){
           $excel->sheet('Respostas', function($sheet) use($questions, $alternatives) {
               $sheet->appendRow($questions);
               foreach($alternatives as $alternative)
               {
                   $sheet->appendRow($alternative);
               }
               $sheet->freezeFirstRow();
           });
        })->export('xls');
    }


}

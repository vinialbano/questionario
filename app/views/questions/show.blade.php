@extends('layouts.questionnaire.master')

@section('title')
{{{ $title }}} :: @parent
@stop

@section('content')
<div class="container">
    <div class="row clearfix">
        <div class="col-md-8 col-md-offset-2 column">
            <div class="jumbotron">
                <div class="jumbotron-photo">
                    {{ HTML::image('production/images/cena' . $question->scene . '.png', 'Cena 1', array('class' => 'center-block')) }}
                </div>
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <div class="well">
                            <h4 class="glow in tlt text-center">{{ $question->display_text != "" ? $question->display_text : $question->text }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-6 column">
                    <div class="list-group">
                        <a class="list-group-item active">Opções</a>
                        <div id="origem">
                            @foreach($question->alternatives()->get() as $alternative)
                            <div class="list-group-item" title="{{{ $alternative->id }}}">{{ $alternative->text }}</div>
                            @endforeach
                        </div>
                        @if($question->allow_other)
                        <a href="{{{ URL::route('questions.modal') }}}" id="adicionar" class="list-group-item list-group-item-success ajax-popup-link"><i class="fa fa-plus-square"></i> {{ $question->other_text }}</a>
                        @endif
                    </div>
                </div>
                <div class="col-md-6 column">
                    <div class="list-group">
                        <a class="list-group-item active">Respostas</a>
                        <div id="destino" class="list-group"></div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-6 column">
                    @if($question->getPrevious() != null)
                    <a href="{{{URL::route('questions.show', $question->getPrevious()->id)}}}" class="btn btn-warning btn-block"><i class="fa fa-arrow-circle-left"></i> Anterior</a>
                    @endif
                </div>
                <div class="col-md-6 column">
                    <button type="button" class="btn btn-primary btn-block" id="proximo">Próximo <i class="fa fa-arrow-circle-right"></i></button>
                </div>
            </div>
            {{ Form::open(array('route' => array('answers.store'), 'id' => 'formAnswers')) }}
            {{ Form::hidden('answers', '', array('id' => 'answers')) }}
            {{ Form::hidden('question', $question->id, array('id' => 'question')) }}
            {{ Form::close() }}
        </div>
    </div>
</div>

@stop

@section('scripts')
<script type="text/javascript">

$('.ajax-popup-link').magnificPopup({
    type: 'ajax',
    modal: 'true'

    // other options
});

var multianswer = {{ $question->multianswer }};
var url = "{{ URL::route('answers.store') }}";

function trocaPadding(){
    if($("#origem").children().length == 0){
        $('#origem').css("padding", "20px 0");
    } else {
        $('#origem').css("padding", "0");
    }

    if($("#destino").children().length == 0){
        $('#destino').css("padding", "20px 0");
    } else {
        $('#destino').css("padding", "0");
    }
}

// Origem
Sortable.create(origem, {
    group: {
        name:"origem",
        put: "destino"
    }
});
// Destino
Sortable.create(destino, {
    group: {
        name: "destino",
        put: "origem"
    },
    onAdd: function(){
        if (!multianswer && $('#destino').children().length > 0) {
            this.options.group.put = false;
        }
            trocaPadding();
    },
    onRemove: function(){
        this.options.group.put = "origem";
        trocaPadding();
    }
});

$(document).ready(function(){
    $("#proximo").click(function(event){
        event.preventDefault();
        verifica();
    });

    $('.tlt').textillate({
        in: { effect: 'fadeIn' },
        initialDelay: 500
    });

    trocaPadding();
});
</script>
@stop

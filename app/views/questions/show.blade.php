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
                            <h4 class="glow in text-center">{{ nl2br($question->text) }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 column" id="errors">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <strong>Aviso!</strong> {{$errors->first()}}
                    </div>
                    @endif
                    @if($question->multianswer)
                    <div class="alert alert-warning">
                        <strong>Aviso!</strong> Você pode escolher mais de uma alternativa.
                    </div>
                    @endif
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-6 column">
                    <div class="list-group">
                        <a class="list-group-item active">Opções</a>
                        <div id="origem">
                            @foreach($question->alternatives()->get() as $alternative)
                            <div class="list-group-item" title="{{{ $alternative->id }}}" onmouseover="this.setAttribute('org_title', this.title); this.removeAttribute('title');" onmouseout="this.setAttribute('title', this.getAttribute('org_title'));">{{ $alternative->text }}</div>
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
                    <a href="{{{URL::route('questions.show', Session::get('previous'.$question->id))}}}" class="btn btn-warning btn-block"><i class="fa fa-arrow-circle-left"></i> Anterior</a>
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
});

var multianswer = {{ $question->multianswer }};
var url = "{{ URL::route('answers.store') }}";

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

(function($) {
    $(window).load(function () {
        // retrieved this line of code from http://dimsemenov.com/plugins/magnific-popup/documentation.html#api
        @if(in_array($question->id, [5, 21, 28, 41, 50, 55, 67]))
        $.magnificPopup.open({
            items: {
                src: "{{{URL::route('questions.apresentacao', $question->id)}}}"
            },
            type: 'ajax',
            modal: 'true'

          // You may add options here, they're exactly the same as for $.fn.magnificPopup call
          // Note that some settings that rely on click event (like disableOn or midClick) will not work here
        }, 0);
        @endif
    });
})(jQuery);

$(document).ready(function(){
    $("#proximo").click(function(event){
        event.preventDefault();
        verifica();
    });

    trocaPadding();
});
</script>
@stop

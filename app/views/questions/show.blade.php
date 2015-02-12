@extends('layouts.questionnaire.master')

@section('title')
{{{ $title }}} :: @parent
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron">
                <div class="jumbotron-photo">
                    {{ HTML::image('production/images/cena' . $question->scene . '.png', 'Cena 1', array('class' => 'center-block')) }}
                </div>
                <div class="jumbotron-contents">
                    <h2 class='text-center'>{{ $question->display_text != "" ? $question->display_text : $question->text }}</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Opções</h3>
                                </div>
                                <div id="origem" class="list-group">
                                    @foreach($question->alternatives()->get() as $alternative)
                                    <a class="list-group-item">{{ $alternative->text }}</a>
                                    @endforeach
                                </div>

                                @if($question->allow_other)
                                <a href="{{{ URL::route('questions.modal') }}}" id="adicionar" class="btn btn-primary btn-block ajax-popup-link">{{ $question->other_text }}</a>
                                @endif

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Resposta</h3>
                                </div>
                                <div id="destino" class="list-group"></div>
                            </div>
                        </div>
                    </div>
                    @if($question->next() != null)
                    <a href="{{{URL::route('questions.show', $question->next()->id)}}}" class="btn btn-primary">Próximo</a>
                    @else
                    <a href="{{{URL::route('questions.show', 1)}}}" class="btn btn-primary">Próximo</a>
                    @endif
                </div>
            </div>
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
    },
    onRemove: function(){
        this.options.group.put = "origem";
    }
});
</script>
@stop

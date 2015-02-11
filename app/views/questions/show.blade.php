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
                    {{ HTML::image('production/images/cena1.png', 'Cena 1', array('class' => 'center-block')) }}
                </div>
                <div class="jumbotron-contents">
                    <h2 class='text-center'>{{ isset($question->display_text) && $question->display_text != "" ? $question->display_text : $question->text }}</h2>
                    <div id="multianswer" hidden>
                        {{ $question->multianswer }}
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Opções</h3>
                                </div>
                                <div id="origem" class="list-group" style="padding: 10px 0">
                                    @foreach($question->alternatives()->get() as $alternative)
                                    <a class="list-group-item">{{ $alternative->text }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Resposta</h3>
                                </div>
                                <div id="destino" class="list-group" style="padding: 10px 0"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('scripts')
<script>
var multianswer = {{ $question->multianswer }};

// Origem
var origemSort = Sortable.create(origem, {
    group: {
        name:"origem",
        put: "destino"
    }
});
// Destino
var sortable = Sortable.create(destino, {
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

troca = function(){


    alert($("#destino").children().length);
}
</script>
@stop

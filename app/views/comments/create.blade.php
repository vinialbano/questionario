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
                    {{ HTML::image('production/images/apresentacao.png', '', array('class' => 'center-block')) }}
                </div>
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <div class="well">
                            <h4 class="glow in text-center">Você gostaria de fazer algum comentário?</h4>
                        </div>
                    </div>
                </div>
            </div>
            {{ Form::open(array('route' => array('comments.store'), 'role' => 'form')) }}
            <div class="form-group">

                {{ Form::textarea('comment', '', array('class' => 'form-control', 'rows' => '3', 'placeholder' => 'Escreva aqui!')) }}
            </div>
            <div class="form-group pull-right">
                <button name="submit" type="submit" class="btn btn-success btn-lg"><i class="fa fa-check-circle-o"></i> Enviar</button>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop

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
                            <h4 class="glow in text-center">Muito obrigado por participar!</h4>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{{ URL::route('index')}}}" class="btn btn-success btn-lg pull-right"><i class="fa fa-home"></i> Voltar ao Início</a>
        </div>
    </div>
</div>
@stop

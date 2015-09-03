@extends('layouts.questionnaire.master')

@section('title')
Home :: @parent
@stop

@section('content')
<div class="container">
    <div class="row clearfix">
        <div class="col-md-8 col-md-offset-2 column">
            <div class="jumbotron">
                <div class="jumbotron-photo">
                    {{ HTML::image('production/images/cena5.png', 'Cena 5', array('class' => 'center-block img-responsive')) }}
                </div>
                <div class="jumbotron-contents">
                    <div class="row">
                        <h1 class="text-center">SIAUD - Sistema Interativo para Avaliação do Uso de Drogas</h1>
                        <p>
                            Esta é uma maneira interativa para responder um questionário sobre o uso de álcool e outras drogas entre adolescentes de uma escola pública.
                        </p>
                        <div class="col-md-4 col-md-offset-4">
                            <a href="{{{ URL::route('login') }}}" class="btn btn-success btn-lg btn-block">Entrar</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@stop

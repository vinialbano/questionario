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
                    <h1 class="text-center">Questionário Interativo</h1>
                    <p>
                        Esta é uma maneira interativa para responder o “Questionário sobre o uso de Drogas” para ponderar os problemas relacionados ao uso de álcool e outras drogas entre adolescentes de uma escola pública em um município do Sul de Minas Gerais. Este questionário é uma adaptação do instrumento proposto pela Organização Mundial de Saúde (OMS), desenvolvido pela WHO – Research and Reporting Project on the Epidemiology of Drug Dependence e validado no Brasil por Carlini-Cotrim et al e aplicado nos Levantamentos Nacionais realizados pelo CEBRID.
                    </p>
                    <div class="row">

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

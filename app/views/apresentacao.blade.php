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
                            <h4 class="glow in tlt text-center">Olá, tudo bem? Seja bem vindo ao Questionário Interativo!</h4>
                            <p class="glow in tlt2">Para responder as questões, arraste uma das opções disponíveis da área de Opções para a área de Respostas.</p>
                            <p class="glow in tlt3">Existem questões onde é possível adicionar uma alternativa. Para isso, um botão surgirá na área de opções e clicando nele você poderá inserir novas informações.</p>
                            <p class="glow in tlt4">Para questões com múltipla escolha, basta arrastar mais de uma opção para a área de Respostas.</p>
                            <p class="glow in tlt5">Caso queira trocar de alternativa, basta arrastá-la de volta para a área de Opções.</p>
                        </div>
                    </div>
                </div>
            </div>

            <a href="{{{ URL::route('questions.show', 1)}}}" class="btn btn-success btn-lg pull-right"><i class="fa fa-play-circle"></i> Entendi, vamos começar!</a>
        </div>
    </div>
</div>
@stop

@section('scripts')
<script type="text/javascript">
$(document).ready(function(){

    $('.tlt').textillate({
        in: { effect: 'fadeIn' },
        initialDelay: 500,
        callback: function() {
            $('.tlt2').textillate({
                in: { effect: 'fadeIn' },
                callback: function() {
                    $('.tlt3').textillate({
                        in: { effect: 'fadeIn' },
                        callback: function() {
                            $('.tlt4').textillate({
                                in: { effect: 'fadeIn' },
                                callback: function() {
                                    $('.tlt5').textillate({
                                        in: { effect: 'fadeIn' }
                                    });
                                }
                            });
                        }
                    });
                }
            });
        }
    });


});
</script>
@stop

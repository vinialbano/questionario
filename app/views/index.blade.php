@extends('layouts.questionnaire.master')

@section('title')
Home :: @parent
@stop

@section('content')
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{{ URL::to('/')}}}">Questionário Interativo</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="nav-link" href="{{ URL::route('admin.dashboard.index') }}">Login</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>


<div class="container">
    <div class="row clearfix">
        <div class="col-md-8 col-md-offset-2 column">
            <div class="jumbotron">
                <div class="jumbotron-photo">
                    {{ HTML::image('production/images/cena4.png', 'Cena 4', array('class' => 'center-block img-responsive')) }}
                </div>
                <div class="jumbotron-contents">
                    <h1 class="text-center">Questionário Interativo</h1>
                    <p>
                        Esta é uma implementação do “Questionário sobre o uso de Drogas” para ponderar os problemas relacionados
                        ao uso de álcool e outras drogas entre adolescentes de uma escola pública em um município do Sul de Minas Gerais.
                    </p>
                    <p>
                        Este questionário é uma adaptação do instrumento proposto pela Organização Mundial de Saúde (OMS),
                        desenvolvido pela WHO – Research and Reporting Project on the Epidemiology of Drug Dependence e validado no
                        Brasil por Carlini-Cotrim et al e aplicado nos Levantamentos Nacionais realizados pelo CEBRID.
                    </p>
                    <div class="row">

                        <div class="col-md-4 col-md-offset-4">
                            <a href="{{{ URL::route('apresentacao') }}}" class="btn btn-success btn-lg">Responder Questionário</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@stop

@section('scripts')
<script type="text/javascript">
$("body").css("padding-top", "70px");
</script>
@stop

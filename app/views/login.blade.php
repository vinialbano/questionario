@extends('layouts.questionnaire.master')

@section('styles')
{{ HTML::style('vendor/adminlte/css/AdminLTE.css') }}
@stop

@section('title')
{{{ $title }}} :: @parent
@stop

@section('content')
<div class="form-box" id="login-box">
	<div class="header">Área Administrativa</div>
	<form role="form"  method="post" action="{{{ URL::to('/users/login') }}}" accept-charset="UTF-8">

		<div class="body bg-gray">
			<div class="form-group">
				<input type="text" name="username" id="username" class="form-control" placeholder="Usuário"/>
			</div>
			<div class="form-group">
				<input type="password" name="password" id="password" class="form-control" placeholder="Senha"/>
			</div>
		</div>
		@if (Session::get('error'))
		<div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
		@endif

		@if (Session::get('notice'))
		<div class="alert">{{{ Session::get('notice') }}}</div>
		@endif
		<div class="footer">
			<button type="submit" class="btn bg-olive btn-block">Entrar</button>
			<p><a href="#">Esqueci minha senha</a></p>
		</div>
	</form>

</div>
@stop

@extends('layouts.admin.master')

{{-- Page Title --}}
@section('title')
    {{{ $title }}} :: @parent
@stop

{{-- Content --}}
@section('content')
    @if (Session::get('error'))
        <div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
    @endif
    @if (Session::get('success'))
        <div class="alert alert-success">{{{ Session::get('success') }}}</div>
    @endif
    {{ Form::open(array('route' => array('admin.users.store') , 'method' => 'post', 'id' => 'user-form')) }}
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('user', 'Usuário') }}
            {{ Form::text('user', '', array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('password', 'Senha') }}
            {{ Form::password('password', array('class' => 'form-control', 'id' => 'password')) }}
        </div>
        <div class="form-group">
            {{ Form::label('passwordConfirm', 'Confirmar senha') }}
            {{ Form::password('passwordConfirm', array('class' => 'form-control', 'id' => 'passwordConfirm')) }}
        </div>
    </div><!-- /.box-body -->

    <div class="box-footer">
        <button type="submit" class="btn btn-primary"><span class="fa fa-check"></span> Enviar</button>
    </div>
    {{ Form::close() }}
@stop

{{-- Scripts --}}
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#user-form").validate({
                rules: {
                    password: {
                        required: true,
                        minlength: 6,
                        maxlength: 10,

                    } ,
                    passwordConfirm: {
                        equalTo: "#password",
                        minlength: 6,
                        maxlength: 10
                    }


                },
                messages:{
                    password: {
                        required:"As senhas não são iguais"

                    }
                }

            });

        });
    </script>
@stop
@extends('layouts.admin.master')

{{-- Page Title --}}
@section('title')
{{{ $title }}} :: @parent
@stop

@section('content')
    <a class="btn btn-primary" href="{{{URL::route('admin.answers.export')}}}">Exportar</a>
@stop

@extends('layouts.admin.master')

{{-- Page Title --}}
@section('title')
{{{ $title }}} :: @parent
@stop

{{-- Content --}}
@section('content')
<ul class="timeline">
    @foreach($dates as $date)
    <!-- timeline time label -->
    <li class="time-label">
        <span class="bg-green">
            {{ $date }}
        </span>
    </li>
    <!-- /.timeline-label -->

    <!-- timeline item -->
    @foreach($comments as $comment)
    @if(strcmp($comment->getFormatedDate(),$date) == 0)
    <li>
        <!-- timeline icon -->
        <i class="fa fa-comment bg-blue"></i>
        <div class="timeline-item">

            <span class="time"><i class="fa fa-clock-o"></i>
                {{ $comment->getFormatedTime() }}
            </span>
            <h3 class="timeline-header no-border">{{ $comment->comment }}</h3>

        </div>
    </li>
    @endif
    @endforeach
    @endforeach
    <!-- END timeline item -->
    <li>
        <i class="fa fa-clock-o"></i>
    </li>
</ul>
@stop

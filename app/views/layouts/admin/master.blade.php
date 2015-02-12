<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>
        @section('title')
        Questionário Interativo
        @show
    </title>

    @include('layouts.admin.styles')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="skin-blue">
    @include('layouts.admin.partials.header')

    <div class="wrapper row-offcanvas row-offcanvas-left">
        @include('layouts.admin.partials.sidebar')

        <aside class="right-side">
            <section class="content-header">
                <!-- Content Header (Page header) -->
                <h1>
                    {{ isset($title) ? $title: 'Administration' }}
                    <small>{{-- isset($description) ? $description : '' --}}</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{{ URL::to('admin') }}}"><i class="fa fa-pie-chart"></i> Home</a></li>
                    @foreach (explode("/", Request::path()) as $path)
                    @if ($path == 'admin')
                    <li class="active"><a href="{{ URL::to('admin') }}">{{ ucfirst($path) }}</a></li>
                    @else
                    <li class="active"><a href="{{ URL::to('admin/'.$path) }}">{{ ucfirst($path) }}</a></li>
                    @endif
                    @endforeach
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Notifications -->
                {{--@include('layouts.admin.notifications')--}}
                <!-- ./ notifications -->

                <!-- Content -->
                @yield('content')
                <!-- ./ content -->
            </section><!-- /.content -->
        </aside><!-- /.right-side -->
    </div>

    {{-- Vendor Scripts --}}
    @include('layouts.admin.scripts')

    {{-- Optional Scripts --}}
    @yield('scripts')

</body>
</html>

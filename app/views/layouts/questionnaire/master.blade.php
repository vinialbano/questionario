<!DOCTYPE html>
<html lang="pt-br" class="questionnaire">
<head>
    <meta charset="UTF-8">
    <title>
        @section('title')
        Questionário Interativo
        @show
    </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Styles -->
    @include('layouts.questionnaire.styles')
    @yield('styles')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    @yield('content')

    @include('layouts.questionnaire.scripts')
    @yield('scripts')

</body>
</html>

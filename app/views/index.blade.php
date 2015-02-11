<!DOCTYPE html>
<html class="bg-black" lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Questionário Interativo</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Bootstrap 3.3.3 -->
    {{ HTML::style('production/stylesheets/bootstrap.css') }}
    <!-- Font Awesome 4.3.0 -->
    {{ HTML::style('vendor/fontawesome/css/font-awesome.min.css') }}
    <!-- Theme style -->
    {{ HTML::style('vendor/adminlte/css/AdminLTE.css') }}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="bg-black">

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

    <!-- JQuery 2.1.3 -->
    {{ HTML::script('vendor/jquery/dist/jquery.min.js') }}
    <!-- Bootstrap 3.3.3 -->
    {{ HTML::script('vendor/bootstrap-sass/assets/javascripts/bootstrap.min.js') }}

</body>
</html>

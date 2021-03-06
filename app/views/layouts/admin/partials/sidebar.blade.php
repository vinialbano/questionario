<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ url('vendor/adminlte/img/avatar5.png') }}" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Hello, {{ Auth::user()->username }}</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Buscar..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">

            <li {{ (Request::is('admin/comments*') ? 'class="active"' : '') }}>
                <a href="{{{ URL::route('admin.comments.index') }}}"><span class="fa fa-comments"></span>
                    Comentários</a>
            </li>

            <li {{ (Request::is('admin/questions*') ? 'class="active"' : '') }}>
                <a href="{{{ URL::route('admin.questions.index') }}}"><span class="fa fa-question"></span> Questões</a>
            </li>

            <li {{ (Request::is('admin/users*') ? 'class="active"' : '') }}>
                <a href="{{{ URL::route('admin.users.create') }}}"><span class="fa fa-user"></span> Cadastrar
                    Usuário</a>
            </li>

            <li {{ (Request::is('admin/answers*') ? 'class="active"' : '') }}>
                <a href="{{{ URL::route('admin.answers.export') }}}"><span class="fa fa-exclamation"></span>
                    Respostas</a>
            </li>
            <li>
                {{ Form::open(array('route' => 'admin.dashboard.reset', 'method' => 'post', 'id' => 'reset-form')) }}
                {{Form::close()}}
                <a id="reset-database" href=""><span class="fa fa-warning"></span> Reiniciar Banco de Dados</a>
            </li>


            <li>
                <a href="{{{ URL::to('logout') }}}"><i class="fa fa-sign-out"></i> Logout</a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<script type="text/javascript">
    document.getElementById("reset-database").addEventListener("click", function(event){
        event.preventDefault();
        if (confirm("Tem certeza que deseja reiniciar o banco de dados? Isso não poderá ser refeito e irá levar alguns segundos. É recomendado que gere o relatório antes.")) {
            document.body.style.cursor="progress";
            document.getElementById("reset-form").submit();
        }
    });
</script>


<header class="header">
    <a href="/" class="logo">
        <!-- Add the class icon to your logo image or logo icon to add the margining -->
        {{ Config::get('site.name') }}
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="fa fa-user"></span> {{{ Auth::user()->username }}}	<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header bg-light-blue">
                            <img src="{{ url('vendor/adminlte/img/avatar5.png') }}" class="img-circle" alt="User Image" />
                            <p>
                                {{{ Auth::user()->username }}}
                                <small>Member since: {{{ Auth::user()->created_at }}}</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="col-xs-12 text-center">
                                <a href="{{{ URL::to('logout') }}}"><span class="fa fa-sign-out"></span> Logout</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!DOCTYPE html>
<html>
    <head>
        <title>Sistema de Colegio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">


        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <!----webfonts--->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
        <!---//webfonts--->
        <!-- Nav CSS -->

        <link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    </head>
    <body>

        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SGSE</a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="img/1.png"><span class="badge">9</span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-menu-header text-center">
                            <strong>Account</strong>
                        </li>
                        <li class="m_2"><a href="#"><i class="fa fa-user"></i> Perfil</a></li>
                        <li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Configuraciones</a></li>
                        <li class="m_2"><a href="#"><i class="fa fa-lock"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>

            @yield('siderbar')
        </nav>

        <!-- contenido -->
        <div id="wrapper">
            <div id="page-wrapper">
                @yield('content')
            </div>

        </div>
        <!-- terina contenido -->
        <div id="footer">
            2013 &copy; Metro Lab Dashboard.
        </div>

        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>

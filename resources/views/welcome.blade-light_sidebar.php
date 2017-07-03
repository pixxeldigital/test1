<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="{{URL::asset('assets/images/favicon.ico')}}">

        <!-- App title -->
        <title>Training & Development :: Welcome Page </title>
         <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>

        <!-- App CSS -->
        <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
         <link href="{{URL::asset('assets/css/core.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/css/components.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/css/menu.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
        <script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

  <style> 
.alert-danger{background-color: #EE2C40;}
.alert-success{background-color: #008800;}
  </style>        
</head>
<body>
    
    <div class="account-pages"></div>
    <div class="clearfix"></div>
    <header>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{URL::asset('assets/images/logo/logo.png')}}" alt="Jaipur Rugs"  style="max-height: 26px;"/>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                       @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                           <!-- <li><a href="{{ route('register') }}">Register</a></li> -->
                        @else
                         <li><a href="{{ url('/home') }}">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="wrapper-page">
    </div>
     @yield('content')
    <!-- end wrapper page -->
    <footer class="footer" style="width: 100%; left:0;">
        <div class="row">
            <div class="col-md-12 p-l-0 p-r-0">
                <div class="col-md-4 col-xs-12 p-l-0">
                    <p class="text-left m-b-0"><span>Training And Development Portal v 1.0</span></p>
                </div>
                <div class="col-md-4 col-xs-12 p-l-0">
                    <p class="text-center m-b-0"><span>{{ date('Y')}} © JRF</span></p>
                </div>
                <div class="col-md-4 col-xs-12 p-r-0">
                    <p class="text-right m-b-0"><span>Powered By </span> <a target="_blank" href="http://www.pixxeldigital.com/">Pixxel Digital </a></p>
                </div>
                <div class="clearfix"></div>                            
            </div>
        </div>
    </footer>
    </body>
</html>

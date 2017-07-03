<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- App Favicon -->
        <link rel="shortcut icon" href="{{URL::asset('assets/images/favicon.ico')}}">

        <!-- App title -->
        <title>Looms Portal</title>
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
        <link href="{{URL::asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css" />
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
        .footer{left: 0px; color: #2A2A2A; background: rgba(255,255,255,0.5); }
        .wrapper-page { width: 480px;}
        #loginDiv{background: rgba(255,255,255,0.5) !important; }
    </style>        
    </head>
    <body>
    
    <div class="account-pages"></div>
    <div class="clearfix"></div>
    <div class="wrapper-page">
         @yield('content')
    </div>
    @include('myLayout.footer')
        <!-- end wrapper page -->
    </body>
</html>

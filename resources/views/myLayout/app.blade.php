<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- App Favicon -->
        <link rel="shortcut icon" href="{{URL::asset('assets/images/favicon.ico')}}">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- App title -->
        <title>{{ $title }}</title>
        <!-- Plugin CSS -->
         @yield('pluginCss')
        <!-- // Plugin CSS -->
        <!-- App CSS -->
        <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/css/core.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/css/components.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/css/menu.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/css/dropzone.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css" />
        
       <!-- HTML5 Shiv and Respond.js')}}')}} IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js')}}')}} doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}')}}"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js')}}')}}/1.3.0/respond.min.js')}}')}}"></script>
        <![endif]-->
        <!-- Custom CSS -->
         @yield('customCss')
        <!-- // Custom CSS -->
        <script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/modernizr.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script> 
        <style>
            .rightSideMenu{
                overflow: visible !important;
            }
        </style>
     </head>

    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="{{url('/home')}}" class="logo"> 
                        <span><img src="{{URL::asset('assets/images/logo/new/black.png')}}" alt="Jaipur Rugs"  style="max-width: 210px;"/></span><i><!-- <img src="{{URL::asset('assets/images/logo/new/black.png')}}" alt="Jaipur Rugs"> --> J</i>
                    </a>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">

                        <!-- Page title -->
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button class="button-menu-mobile open-left">
                                    <i class="zmdi zmdi-menu"></i>
                                </button>
                            </li>
                        </ul>

                        <!-- Right(Notification and Searchbox -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <!-- Notification -->
                                <div class="notification-box">
                                    <ul class="list-inline m-b-0">
                                        <li>
                                            <a href="javascript:void(0);" class="right-bar-toggle">
                                                <i class="zmdi zmdi-notifications-none"></i>
                                            </a>
                                            <div class="noti-dot">
                                                <span class="dot"></span>
                                                <span class="pulse"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Notification bar -->
                            </li>
                             <li class="dropdown" style="margin-top: 10px;">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           <i class="ti-power-off m-r-5"></i> Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- end container -->
                </div><!-- end navbar -->
            </div>
            <!-- Top Bar End -->

              <!-- ========== Left Sidebar Start ========== -->
                    @include('myLayout.left_fixed_sidebar')
              <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                    <div id="toast-container" class="toast-top-right" aria-live="polite" role="alert">
                    <div class="toast toast-success" style="display: none;"></div>
                    </div>
                        @yield('content')
                    </div> <!-- container -->

                </div> <!-- content -->

                <!--Footer-->
                @include('myLayout.footer')
                <!-- // Footer-->

            </div>
            <!-- End content-page -->


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            @include('myLayout.right_notification')
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{URL::asset('assets/js/detect.js')}}"></script>
        <script src="{{URL::asset('assets/js/fastclick.js')}}"></script>
        <script src="{{URL::asset('assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{URL::asset('assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{URL::asset('assets/js/waves.js')}}"></script>
        <script src="{{URL::asset('assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{URL::asset('assets/js/jquery.scrollTo.min.js')}}"></script>

        <!-- plugin JS -->
        
        @yield('pluginJs')
        <!-- App js -->
        <script src="{{URL::asset('assets/js/jquery.core.js')}}"></script>
        <script src="{{URL::asset('assets/js/jquery.app.js')}}"></script>
        
        @yield('customJs')

    </body>
</html>

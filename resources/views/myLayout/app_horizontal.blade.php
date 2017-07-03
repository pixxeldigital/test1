<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- App Favicon -->
        <link rel="shortcut icon" href="{{URL::asset('assets/images/favicon.ico')}}">

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


    <body>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- LOGO -->
                    <div class="topbar-left">
                    <a href="{{url('/')}}" class="logo"> 
                        <span><img src="{{URL::asset('assets/images/logo/logo-white.png')}}" alt="Jaipur Rugs"  style="max-height: 26px;"/></span>
                        <!-- <i><img src="{{URL::asset('assets/images/logo/logo-small.png')}}" alt="Jaipur Rugs"></i> -->
                    </a>
                </div>
                    <!-- End Logo container-->
                    <div class="menu-extras">

                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li>
                             <!--    <form role="search" class="navbar-left app-search pull-left hidden-xs">
                                     <input type="text" placeholder="Search..." class="form-control">
                                     <a href=""><i class="fa fa-search"></i></a>
                                </form>  -->
                            </li>
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

                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect waves-light profile " data-toggle="dropdown" aria-expanded="true">
                                    <img src="{{URL::asset('assets/images/users/avatar-1.jpg')}}" alt="user-img" class="img-circle user-img">
                                    <div class="user-status away"><i class="zmdi zmdi-dot-circle"></i></div>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> {{ Auth::user()->name }}</a></li>
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
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>

                </div>
            </div>

            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li>
                                <a href="{{url('/dashboard') }}" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-flag"></i> <span> Founder's Mentality </span><i class="fa fa-caret-down"></i> </a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <a href="{{ URL::to('/project/founders-mentality/') }}" class="waves-effect"><b>About</b></a>
                                    </li>
                                    <li>
                                       <ul>
                                            <li><a href="#"><b>Frontline Development</b></a></li>
                                            <li>
                                                <a href="{{ URL::to('/training/who-we-are/') }}">Who We Are</a>
                                             </li>
                                             <li>
                                                <a href="{{ URL::to('/training/big-ticket/') }}" >Big ticket</a>
                                            </li>
                                            <li>
                                                <a href="{{ URL::to('/training/grassroots-leadership-development-program/') }}">Grassroots Leadership (GLDP)</a>
                                            </li>
                                            <li>
                                                <a href="{{ URL::to('/training/rural-field-immersion-program/') }}">Rural Field Immersion (RFIP)</a>
                                            </li>
                                            <li>
                                                <a href="{{ URL::to('/training/social-enterprise-leadership-program/') }}" class="waves-effect">Social Enterprise Leadership (SELP)</a>
                                            </li>
                                        </ul>
                                    </li> 
                                    <li>
                                        <ul>
                                            <li><a href="#"><b>Women Empowerment</b></a></li>
                                            <li>
                                                <a href="{{ URL::to('/training/bunkar-sakhi-program/') }}" class="waves-effect">Bunkar Sakhi Program</a>
                                            </li>
                                            <li>
                                                <a href="{{ URL::to('/training/katwari-sakhi-program/') }}" class="waves-effect">Katwari Sakhi Program</a>
                                            </li>
                                            <li>
                                                <a href="{{ URL::to('/training/weaver-engagement-program/') }}" class="waves-effect">Weaver Engagement Program</a>
                                            </li>
                                            <li>
                                                <a href="{{ URL::to('/training/young-women-social-entrepreneurship-development-program/') }}" class="waves-effect">Young Women Social Entrepreneurship (YWSEDP)</a>
                                            </li>
                                        </ul>
                                    </li>  
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-book"></i><span> Govt. Projects </span><i class="fa fa-caret-down"></i> </a>
                                <ul class="submenu">
                                    <li><a href="{{ URL::to('/training/survey/') }}">Survey</a></li>
                                    <li><a href="{{ URL::to('/training/skill-development/') }}">Skill Development</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-book"></i><span> Theory-U </span><i class="fa fa-caret-down"></i> </a>
                                <ul class="submenu">
                                    <li><a href="{{ URL::to('/project/theory-u/') }}">About</a></li>
                                    <li><a href="{{ URL::to('/training/sensing-journey/') }}">Sensing Journey</a></li>
                                    <li><a href="{{ URL::to('/training/coaching-circle/') }}">Coaching Circle</a></li>
                                </ul>
                            </li> 
                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-book"></i><span> Competency </span> </a>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-book"></i><span> Technical </span><i class="fa fa-caret-down"></i> </a>
                                <ul class="submenu">
                                    <li><a href="#">DND</a></li>
                                    <li><a href="#">Pixxel</a></li>
                                    <li><a href="#">IT</a></li>
                                    <li><a href="#">ERP</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="{{ URL::to('/events') }}"><i class="fa fa-calendar"></i></i><span> Calender </span> </a>
                            </li> 
                        </ul>
                        <!-- End navigation menu  -->
                    </div>
                </div>
            </div>
        </header>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container">
                @yield('content')

                <!--Footer-->
                @include('myLayout.footer')
                <!-- // Footer-->
            </div>
                <!-- Right Sidebar -->
                @include('myLayout.right-notification')
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





      
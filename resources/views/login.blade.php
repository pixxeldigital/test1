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
        <title>JRF Artisans - Login </title>
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
    <div class="wrapper-page">
        <div class="text-center">
            <a href=""><img src="{{URL::asset('assets/images/logo/new/white.png')}}" alt="Jaipur Rugs" /></a>
        </div>
        <div class="m-t-40 card-box" style="background: rgba(255, 255, 255, 0.7);">
             <div class="row" id="messageBox" style="display:none;">               
                <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                    <div class="text-center alert" id="msgWrapper" style="padding:5px 20px; margin-top: 30px;">
                        <h5 id="Message"></h5>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                 <form class="form-horizontal" role="form" method="POST" action="{{ url('/customlogin') }}" id="">
                 <?php $message=""; ?>
                        {{ csrf_field() }}

                        @if($message!="")
                            {{$message}}
                        @endif
                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Username </label>

                            <div class="col-md-8">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <div class="">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}} style="opacity:1;"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary  btn-bordred waves-effect w-md waves-light m-b-5 btn-block">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
        <!-- end card-box-->
    </div>
        <!-- end wrapper page -->
		<footer class="footer">
            <div class="row">
                <div class="col-md-12 p-l-0 p-r-0">
                    <div class="col-md-4 col-xs-12 p-l-0">
                        <p class="text-left m-b-0"><span>Artisan Portal v 1.0</span></p>
                    </div>
                    <div class="col-md-4 col-xs-12 p-l-0">
                        <p class="text-center m-b-0"><span>2017 © JRF</span></p>
                    </div>
                    <div class="col-md-4 col-xs-12 p-r-0">
                        <p class="text-right m-b-0"><span>Powered By </span> <a target="_blank" href="http://www.pixxeldigital.com/">Pixxel Digital </a></p>
                    </div>
                    <div class="clearfix"></div>                            
                </div>
            </div>
        </footer>
        <!-- jQuery  -->
          
        <script>
            var resizefunc = [];
        </script>

            <script> 
                $("#loginUsername").focus(function(){
                    $("#Message").html("");
                    $("#messageBox").hide();
                    $("#artisanLoginForm")[0].reset();
                });


        $("#artisanLoginForm").submit(function(event){

                            event.preventDefault();

                            var username         =  $("#loginUsername").val();
                            var password         =  $("#loginPassword").val();

                            var url =$(this).attr("action");
                                $.ajax({
                                    method:"POST",
                                    url:url,
                                    data: $(this).serialize(),
                                    success:function(response){

                                        if($.trim(response)=="success")
                                            {
                                                window.location.href="/dashboard";
                                            } 
                                            else
                                            {
                                                $("#Message").html("");
                                                $("#msgWrapper").addClass('alert-danger');
                                                $("#Message").html(response);
                                                $("#artisanLoginForm")[0].reset();
                                                $("#messageBox").css("display","block");
                                            }
                                           
                                    },
                                    error : function(error)
                                    {
                                        console.log(error);
                                            $("#Message").html("");
                                            $("#msgWrapper").addClass('alert-danger');
                                            $("#Message").html("server connection error, please try after some time");
                                            $("#artisanLoginForm")[0].reset(); 
                                            $("#messageBox").css("display","block");
                                    }
                                });
                   });

            </script>

      <!-- // jQuery  -->

	</body>
</html>

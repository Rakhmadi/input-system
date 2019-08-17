<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Login Page | SensationApp - Responsive admin template.</title>
        <link rel="shortcut icon" href="img/favicon.ico">
        <!--STYLESHEET-->
        <!--=================================================-->
        <!--Roboto Slab Font [ OPTIONAL ] -->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">
        <!--Bootstrap Stylesheet [ REQUIRED ]-->
        <link href="dsign/css/bootstrap.min.css" rel="stylesheet">
        <!--Jasmine Stylesheet [ REQUIRED ]-->
        <link href="dsign/css/style.css" rel="stylesheet">
        <!--Font Awesome [ OPTIONAL ]-->
        <link href="dsign/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!--Switchery [ OPTIONAL ]-->
        <link href="dsign/plugins/switchery/switchery.min.css" rel="stylesheet">
        <!--Bootstrap Select [ OPTIONAL ]-->
        <link href="dsign/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
        <!--Demo [ DEMONSTRATION ]-->
        <link href="dsign/css/demo/jasmine.css" rel="stylesheet">
        <!--SCRIPT-->
        <!--=================================================-->
        <!--Page Load Progress Bar [ OPTIONAL ]-->
        <link href="dsign/plugins/pace/pace.min.css" rel="stylesheet">
        <script src="dsign/plugins/pace/pace.min.js"></script>
    </head>
    <!--TIPS-->
    <!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
    <body>
        <div id="container" class="cls-container">
            <!-- LOGIN FORM -->
            <!--===================================================-->
            <div class="lock-wrapper">
                <div class="panel lock-box">
                    <div class="center"> <img alt="" src="dsign/img/user.png" class="img-circle"/> </div>
                    <h4> Hello User !</h4>
                    <p class="text-center">Please login to Access your Account</p>
                    <div class="row">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <div class="text-left">
                                    <label for="email">Email</label>
                                   <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="text-left">
                                    <label for="password">Password</label>
                                        <input id="password" placeholder="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="pull-left pad-btm">
                                    <label class="form-checkbox form-icon form-text">
                                    <input  class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>


                              <button type="submit" class="btn btn-block btn-primary">
                                Sign In
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
                <div class="registration"> Don't have an account ! <a href="#/pages/signup"> <span class="text-primary"> Sign Up </span> </a> </div>
            </div>
        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->
        <!--JAVASCRIPT-->
        <!--=================================================-->
        <!--jQuery [ REQUIRED ]-->
        <script src="dsign/js/jquery-2.1.1.min.js"></script>
        <!--BootstrapJS [ RECOMMENDED ]-->
        <script src="dsign/js/bootstrap.min.js"></script>
        <!--Fast Click [ OPTIONAL ]-->
        <script src="dsign/plugins/fast-click/fastclick.min.js"></script>
        <!--Jasmine Admin [ RECOMMENDED ]-->
        <script src="dsign/js/scripts.js"></script>
        <!--Switchery [ OPTIONAL ]-->
        <script src="dsign/plugins/switchery/switchery.min.js"></script>
        <!--Bootstrap Select [ OPTIONAL ]-->
        <script src="dsign/plugins/bootstrap-select/bootstrap-select.min.js"></script>
        <!--Demo script [ DEMONSTRATION ]-->
        <script src="dsign/js/demo/jasmine.js"></script>
    </body>
</html>
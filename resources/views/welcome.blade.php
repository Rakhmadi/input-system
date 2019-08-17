<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Login Page </title>
        <link href="dsign/css/bootstrap.min.css" rel="stylesheet">
        <link href="dsign/css/style.css" rel="stylesheet">
        <link href="dsign/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="dsign/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">

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
               
            </div>
        </div>
        <script src="dsign/js/jquery-2.1.1.min.js"></script>
        <script src="dsign/js/bootstrap.min.js"></script>
        <script src="dsign/js/scripts.js"></script>
        <script src="dsign/plugins/bootstrap-select/bootstrap-select.min.js"></script>
    </body>
</html>
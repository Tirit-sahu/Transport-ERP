<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Apple devices fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Apple devices fullscreen -->
    <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

    <title>Transport - Login</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{url('/')}}/admin/css/bootstrap.min.css">
    <!-- icheck -->
    <link rel="stylesheet" href="{{url('/')}}/admin/css/plugins/icheck/all.css">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{url('/')}}/admin/css/style.css">
    <!-- Color CSS -->
    <link rel="stylesheet" href="{{url('/')}}/admin/css/themes.css">


    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Nice Scroll -->
    <script src="{{url('/')}}/admin/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- Validation -->
    <script src="{{url('/')}}/admin/plugins/validation/jquery.validate.min.js"></script>
    <script src="{{url('/')}}/admin/js/plugins/validation/additional-methods.min.js"></script>
    <!-- icheck -->
    <script src="{{url('/')}}/admin/js/plugins/icheck/jquery.icheck.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{url('/')}}/admin/js/bootstrap.min.js"></script>
    <script src="{{url('/')}}/admin/js/eakroko.js"></script>

    <!--[if lte IE 9]>
        <script src="js/plugins/placeholder/jquery.placeholder.min.js"></script>
        <script>
            $(document).ready(function() {
                $('input, textarea').placeholder();
            });
        </script>
    <![endif]-->


    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.html" />
    <!-- Apple devices Homescreen icon -->
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />

</head>

<body class='login'>
    <div class="wrapper">
        <h1>
            <a href="index-2.html">
                Tamanna Road Carrier</a>
        </h1>
        <div class="login-body">
            <h2>Loing In</h2>
            <form method="POST" action="{{ route('login') }}" class='form-validate'>
                 @csrf
                <div class="form-group">
                    <div class="email controls">
                        <input type="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email address" class='form-control' data-rule-required="true" data-rule-email="true">
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="pw controls">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password" data-rule-required="true">
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                </div>
                <div class="submit">
                    
                    <input type="submit" value="Login In" style="width: 100%; float: center;" class='btn btn-primary'>
                </div>
            </form>
            <div class="forget">
                <a href="#">
                    <span></span>
                </a>
            </div>
        </div>
    </div>

</body>


</html>

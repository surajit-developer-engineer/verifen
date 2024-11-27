<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>Verifen Administrator</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/css/font-awesome.min.css') }}">
    <!-- Bootstrap -->
    <link type="text/css" href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Owl Carousel -->
    <link type="text/css" href="{{ asset('admin/css/owl.carousel.min.css') }}" rel="stylesheet">
    <!-- Custom Css -->
    <link type="text/css" href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <section class="loginBody">
        <img class="loginBg" src="{{ asset('admin/images/login-body-bg.jpg') }}" alt="">
        <div class="loginForm">
            <div class="container">
                <div class="loginLogo">
                    <a href="{{ route('login') }}"><img src="{{ asset('admin/images/logo.png') }}" alt=""></a>
                </div>
                <div class="loginFormBox">
                    <div class="loginLock">
                        <img src="{{ asset('admin/images/login-lock-icon.png') }}" alt="">
                    </div>
                    @include('includes.message')
                    <form class="SKPformField" method="POST" action="{{ route('admin.login') }}">
                        {{ csrf_field() }}

                        <div class="FullWidthField">
                            <input type="email" class="form-control" name="email" placeholder="Email Address"
                                value="{{ old('email') }}" autofocus required>
                        </div>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                        <div class="FullWidthField">
                            <input type="password" class="form-control" name="password" placeholder="Password"
                                minlength=6 required>
                        </div>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                        <div class="FullWidthField">
                            <input type="submit" class="blueBtn" name="" value="Login to Dashboard">
                        </div>
                    </form>
                </div>
                <p class="copyright">Copyright © {{ date('Y') }} verifen.com</p>
            </div>
        </div>
    </section>


    <!-- JS Start here -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')
    </script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('admin/js/owl.carousel.min.js') }}"></script>
    <!-- Custome js -->
    <script src="{{ asset('admin/js/custom.js') }}"></script>
</body>

</html>

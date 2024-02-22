<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Login - Webiin</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito Sans:400,500,700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link href="{{url('themes/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('themes/assets/plugins/font-awesome/css/all.min.css')}}" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="{{url('themes/assets/css/connect.min.css')}}" rel="stylesheet">
    <link href="{{url('themes/assets/css/dark_theme.css')}}" rel="stylesheet">
    <link href="{{url('themes/assets/css/custom.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ url("/themes/assets//images/favicon/apple-icon-57x57.png")}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ url("/themes/assets/images/favicon/apple-icon-60x60.png")}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url("/themes/assets/images/favicon/apple-icon-72x72.png")}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url("/themes/assets/images/favicon/apple-icon-76x76.png")}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url("/themes/assets/images/favicon/apple-icon-114x114.png")}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ url("/themes/assets/images/favicon/apple-icon-120x120.png")}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ url("/themes/assets/images/favicon/apple-icon-144x144.png")}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url("/themes/assets/images/favicon/apple-icon-152x152.png")}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url("/themes/assets/images/favicon/apple-icon-180x180.png")}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ url("/themes/assets/images/favicon/android-icon-192x192.png")}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url("/themes/assets/images/favicon/favicon-32x32.png")}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ url("/themes/assets/images/favicon/favicon-96x96.png")}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url("/themes/assets/images/favicon/favicon-16x16.png")}}">
    <link rel="manifest" href="{{ url("/themes/assets/images/favicon/manifest.json")}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ url("/themes/assets/images/favicon/ms-icon-144x144.png")}}">
    <meta name="theme-color" content="#ffffff">

</head>

<body class="auth-page sign-in">

    <div class='loader'>
        <div class='spinner-grow text-primary' role='status'>
            <span class='sr-only'>Loading...</span>
        </div>
    </div>
    <div class="connect-container align-content-stretch d-flex flex-wrap login-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 d-none d-lg-flex d-xl-flex flex-wrap align-items-center justify-content-center">
                    <div class="align-middle">
                        <div class="logo-box" style="margin-bottom: -30px">
                            <a href="javascript:;" class="logo-text" style="text-decoration: none; cursor: default; ">
                                Selamat Datang Kembali
                            </a>
                        </div>
                        <div class="text-center">
                            <img src="{{url ("/themes/assets/images/login-3.svg")}}" alt="img-login"
                                style="max-width: 500px; max-height: 500px">

                            <h3 style="margin-top: -55px">Masuk dengan menggunakan akun Webiinmu
                                <br>
                                yang sudah ada atau Daftar Akun</h3>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="auth-form">
                        <div class="row">
                            <div class="col">
                                <div class="d-block d-lg-none d-xl-none">
                                    <div class="logo-box"><a href="{{route('login')}}" class="logo-text">Masuk atau
                                            Daftar</a></div>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <a href="{{route('login.google.redirect')}}" type="button"
                                        class=" btn-block btn-google">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20"
                                            viewBox="0 0 48 48" class="mr-2
                                        ">
                                            <path fill="#FFC107"
                                                d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                                            </path>
                                            <path fill="#FF3D00"
                                                d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                                            </path>
                                            <path fill="#4CAF50"
                                                d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                                            </path>
                                            <path fill="#1976D2"
                                                d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                                            </path>
                                        </svg>
                                        Lanjutkan dengan Google</a>

                                    <div class="text-center py-4">atau</div>

                                    <input type="hidden" name="url" value="{{URL::previous()}}">
                                    <div class="form-group">
                                        <label for="email" class="pl-1">Email</label>
                                        <input type="email" id="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            value="{{ old('email') }}" aria-describedby="emailHelp">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="pl-1">Password</label>
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            id="password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block btn-submit">Masuk</button>

                                    <div class="auth-options">
                                        <div class="custom-control custom-checkbox form-group">
                                            <input type="checkbox" class="custom-control-input" id="exampleCheck1">
                                            <label class="custom-control-label" for="exampleCheck1">Remember me</label>
                                        </div>
                                        <a href="{{route('password.request')}}" class="forgot-link">Forgot Password?</a>
                                    </div>
                                </form>
                                <div class="text-center">

                                    <label class="" for="">Belum Memiliki Akun? </label>
                                    <a href="{{ route('register') }}" class="forgot-link">Daftar</a>

                                    {{-- <li><a href="{{ route('login') }}">Masuk</a></li>
                                    <li><a href="{{ route('register') }}">Daftar</a></li> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Javascripts -->
    <script src="{{url('themes/assets/plugins/jquery/jquery-3.4.1.min.js')}}"></script>
    <script src="{{url('themes/assets/plugins/bootstrap/popper.min.js')}}"></script>
    <script src="{{url('themes/ssets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{url('themes/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{url('themes/assets/js/connect.min.js')}}"></script>
</body>

</html>

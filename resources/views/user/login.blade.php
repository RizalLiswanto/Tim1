{{-- @extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        
        <form action="{{ route('login.action') }}" method="POST">
            @csrf
            <div class="mb-3">
                <center><h1>LOGIN<span class="text-danger"></span></h1></center>
            </div>
            <div class="mb-3">
                <label>Username <span class="text-danger">*</span></label>
                <input class="form-control" type="username" name="username" value="{{ old('username') }}" />
            </div>
            <div class="mb-3">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" value="{{ old('password') }}"/>
                @if($errors->any())
                    @foreach($errors->all() as $err)
                        <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
                @endif
            </div>
            <div class="mb-3">
                <div class="alert alert-primary" role="alert">
                    Belum punya akun? Register sekarang!
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Login</button>
                    <a class="btn btn-warning" href="{{ route('register') }}">register</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection --}}
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POS</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="{{ asset('style/vendors/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/vendors/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('style/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/vendors/selectFX/css/cs-skin-elastic.css') }}">

    <link rel="stylesheet" href="{{ asset('style/assets/css/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form action="{{ route('login.action') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Username <span class="text-danger">*</span></label>
                            <input class="form-control" type="username" name="username" value="{{ old('username') }}" />
                        </div>
                         <div class="form-group">
                            <label>Password <span class="text-danger">*</span></label>
                            <input class="form-control" type="password" name="password" value="{{ old('password') }}"/>
                            @if($errors->any())
                                @foreach($errors->all() as $err)
                                    <p class="alert alert-danger">{{ $err }}</p>
                            @endforeach
                            @endif
                         </div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Login</button>
                                    <div class="social-login-content">
                                      
                                    </div>
                                    <div class="register-link m-t-15 text-center">
                                        <p>Belum punya akun? <a  href="{{ route('register') }}">Register sekarang!</a></p>
                                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('style/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('style/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('style/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/main.js') }}"></script>


</body>

</html>

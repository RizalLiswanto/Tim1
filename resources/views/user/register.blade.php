{{-- @extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('register.action') }}" method="POST">
            @csrf
            <div class="mb-3">
                <center><h1>REGISTER<span class="text-danger"></span></h1></center>
            </div>
            <div class="mb-3">
                <label>Name <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name" value="{{ old('name') }}" />
            </div>
            <div class="mb-3">
                <label>Username <span class="text-danger">*</span></label>
                <input class="form-control" type="username" name="username" value="{{ old('username') }}" />
            </div>
            <div class="mb-3">
                <label>level <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="level" value="{{ old('level') }}" />
            </div>
            <div class="mb-3">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" />
            </div>
            <div class="mb-3">
                <label>Password Confirmation<span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password_confirm" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Register</button>
                <a class="btn btn-danger" href="{{ route('login') }}">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection --}}

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
                @if($errors->any())
                @foreach($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
                @endif
                <div class="login-form">
                    <form action="{{ route('register.action') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="name" value="{{ old('name') }}" />
                        </div>
                         <div class="form-group">
                            <label>Username <span class="text-danger">*</span></label>
                            <input class="form-control" type="username" name="username" value="{{ old('username') }}" />
                         </div>
                         <div class="form-group">
                            <label>Password <span class="text-danger">*</span></label>
                            <input class="form-control" type="password" name="password" />
                         </div>
                         <div class="form-group">
                            <label>Password Confirmation<span class="text-danger">*</span></label>
                            <input class="form-control" type="password" name="password_confirm" />
                         </div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                                    <div class="social-login-content">
                                      
                                    </div>
                                    <div class="register-link m-t-15 text-center">
                                        <p>Sudah punya Akun? <a  href="{{ route('register') }}">Ayo Login sekarang!</a></p>
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

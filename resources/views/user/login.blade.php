@extends('app')
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
@endsection
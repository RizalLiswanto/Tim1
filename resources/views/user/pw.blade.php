@extends('main')
@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">
            @if($errors->any())
                @foreach($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </p>
                @endforeach
                @endif
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>Edit Password</strong>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <form action="{{ route('password.action') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label>Password Lama <span class="text-danger">*</span></label>
                                    <input class="form-control" name="old_password" type="password">
                                </div>
                                <div class="mb-3">
                                    <label>Password Baru<span class="text-danger">*</span></label>
                                    <input class="form-control" name="new_password" type="password">
                                </div>
                                <div class="mb-3">
                                    <label>Konfirmasi Password Baru <span class="text-danger">*</span></label>
                                    <input class="form-control" name="new_password_confirmation" type="password">
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
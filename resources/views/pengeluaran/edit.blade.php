@extends('main')
@section('tittle', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Pengeluaran</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Pengeluaran</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')

<div class="content mt-3">

    <div class="animated fadeIn">


        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Edit Pengeluaran</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('pengeluaran')}}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('pengeluaran', $pengeluaran->id_pengeluaran)}}" method="POST">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" value="{{ $pengeluaran->deskripsi ?? 'name'}}" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Nominal</label>
                                <textarea name="nominal" class="form-control" required>{{ $pengeluaran->nominal ?? 'desc'}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
</div> <!-- .content -->

@endsection
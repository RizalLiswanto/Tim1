@extends('main')
@section('tittle', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Barang Masuk</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Barang Masuk</li>
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
                    <strong>Edit Barang Masuk</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('Barang-masuk/Barang-masuk')}}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('Barang-masuk', $data->id)}}" method="POST">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" name="tanggal_barang" class="form-control" value="{{ $data->tanggal_barang ?? 'nama'}}" autofocus required>
                            </div>
                            <div class="form-group">
                                <label >Nama Produk</label>
                                <input type="text" class="form-control" readonly value="{{ $data->produk->nama_produk }}">
                                <input type="hidden" name="produk_id" value="{{ $data->produk_id}}">
                            </div> 
                            <div class="form-group">
                                <label>Jumlah</label>
                                <input type="text" name="jumlah" class="form-control" value="{{ $data->jumlah }}" autofocus required>
                                <input type="hidden" name="old_jumlah" value="{{ $data->jumlah }}">
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
        
</div> <!-- .content -->

@endsection
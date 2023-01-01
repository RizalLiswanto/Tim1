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
                    <a href="{{ url('Penjualan')}}" class="btn btn-secondary btn-sm">
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
<<<<<<< HEAD:resources/views/pembelian/add.blade.php
                                <input type="date" name="tanggal" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Kode</label>
                                <input type="text" name="kode" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Nama Supplier</label>
                                <input type="text" name="nama_supplier" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <input type="text" name="kategori_produk" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Produk</label>
                                <input type="text" name="nama_produk" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Jumlah</label>
                                <input type="number" name="jumlah" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="number" name="harga" class="form-control" autofocus required>
=======
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
>>>>>>> d6e7b544495b4d5d61ab1234a4a5812aaf47e29c:resources/views/Barang-masuk/Barang-masuk-edit.blade.php
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
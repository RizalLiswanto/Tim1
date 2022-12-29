@extends('main')
@section('tittle', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Pembelian</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Pemmbelian</li>
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
                    <strong>Edit Pembelian</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('pembelian')}}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('pembelian', $pembelian->id)}}" method="POST">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="text" name="tanggal" class="form-control" value="{{ $pembelian->tanggal ?? 'name'}}" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Kode</label>
                                <input type="text" name="kode" class="form-control" value="{{ $pembelian->kode ?? 'name'}}" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Nama Supplier</label>
                                <input type="text" name="nama_supplier" class="form-control" value="{{ $pembelian->nama_supplier ?? 'name'}}" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <input type="text" name="kategori_produk" class="form-control" value="{{ $pembelian->kategori_produk ?? 'name'}}" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Produk</label>
                                <input type="text" name="nama_produk" class="form-control" value="{{ $pembelian->nama_produk ?? 'name'}}" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Jumlah</label>
                                <input type="text" name="jumlah" class="form-control" value="{{ $pembelian->jumlah ?? 'name'}}" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="text" name="harga" class="form-control" value="{{ $pembelian->harga ?? 'name'}}" autofocus required>
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
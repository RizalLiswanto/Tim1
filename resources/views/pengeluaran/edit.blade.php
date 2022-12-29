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
                        <form action="{{ url('pengeluaran', $pengeluaran->id)}}" method="POST">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="text" name="tanggal" class="form-control" value="{{ $pengeluaran->tanggal ?? 'name'}}" autofocus required>
                            </div>
                            <div class="form-group">
                                <label >Nama Produk</label>
                                <input type="text" class="form-control" readonly value="{{ $pengeluaran->produk->nama_produk }}">
                                <input type="hidden" name="produk_id" value="{{ $pengeluaran->produk_id }}">
                            <input type="hidden" name="stok" value="{{ $pengeluaran->produk->stok }}">
                            </div> 
                            <div class="form-group">
                                <label>Jumlah</label>
                                <input type="text" name="jumlah" class="form-control" value="{{ $pengeluaran->jumlah }}" autofocus required>
                                <input type="hidden" name="old_jumlah" value="{{ $pengeluaran->jumlah }}">
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
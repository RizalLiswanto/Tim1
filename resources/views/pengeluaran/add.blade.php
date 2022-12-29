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
                    <strong>Tambah Pengeluaran</strong>
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
                        <form action="{{ url('pengeluaran')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" autofocus required>
                            </div>
                            <div class="row form-group">
                                
                                <div class="col-12 col-md-9">
                                    <label>Pilih Produk</label>
                                    <select name="produk_id" id="select" class="form-control">
                                    @foreach ($pro as $item)
                                        <option value="disabled value" hidden>Pilih Produk</option>
                                    <option value="{{$item->id}}">{{ $item->nama_produk }}</option>
                                @endforeach
                            </select>
                                
                                </div>
                            </div>
                            <div class="form-group">
                                <label >Stok Produk</label>
                                <input type="text" name="stok" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Jumlah</label>
                                <input type="number" name="jumlah" class="form-control" autofocus required>
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
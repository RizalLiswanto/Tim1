@extends('main')
@section('tittle', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Barang masuk</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Barang masuk</li>
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
                    <strong>Tambah Barang masuk</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('Barang-masuks')}}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('Barang-masuks')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Tanggal Barang</label>
                                <input type="date" name="tanggal_barang" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                
                                @foreach ($pro as $item)
                                <input type="hidden" name="kode_id" class="form-control" autofocus required value="{{$item->id}}">
                                @endforeach
                            </div>
                           
                            <div class="row form-group">
                                <div class="col-12 col-md-9">
                                    <select name="produk_id" id="select" class="form-control">
                                        <option value="disabled value">Pilih kategori</option>
                                @foreach ($pro as $item)
                                    <option value="{{$item->id}}">{{ $item->nama_produk }}</option>
                                @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-12 col-md-9">
                                    <select name="kategori_id" id="select" class="form-control">
                                        <option value="disabled value">Pilih kategori</option>
                                @foreach ($kate as $item)
                                    <option value="{{$item->id}}">{{ $item->kategori }}</option>
                                @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Merk</label>
                                <input type="text" name="merk" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="text" name="harga" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Jumlah</label>
                                <input type="text" name="jumlah" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Total</label>
                                <input type="text" name="total" class="form-control" autofocus required>
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
@extends('main')
@section('tittle', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Product</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Product</li>
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
                    <strong>edit Product</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('produk/produk')}}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('produk', $data->id)}}" method="POST">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label>Nama Product</label>
                                <input type="text" name="nama_produk" value="{{ $data->nama_produk ?? 'nama_produk'}}"class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Kode Barang</label>
                                <input type="text" name="kode" value="{{ $data->kode ?? 'kode'}}"class="form-control" autofocus required>
                            </div>
                            <div class="row form-group">
                                <div class="col-12 col-md-9">
                                    <select name="kategori_id" id="select" class="form-control">
                                        <option value="{{ $data->kategori_id ?? 'kategori_id'}}">{{ $data->kategori->kategori}}</option>
                                @foreach ($kate as $item)
                                    <option value="{{$item->id}}">{{ $item->kategori }}</option>
                                @endforeach
                                    </select>
                                </div>
                            </div>        
                            <div class="form-group">
                                <label>Merk</label>
                                <input type="text" name="merk" value="{{ $data->merk ?? 'merk'}}" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Harga Jual</label>
                                <input type="number" name="harga_jual" value="{{ $data->harga_jual ?? 'harga_jual'}}" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Harga Beli</label>
                                <input type="number" name="harga_beli" value="{{ $data->harga_beli ?? 'harga_beli'}}" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Stock</label>
                                <input type="number" name="stok" value="{{ $data->stok ?? 'stok'}}" class="form-control" autofocus required>
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
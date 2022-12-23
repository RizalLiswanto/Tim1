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
                    <strong>Tambah Product</strong>
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
                        <form action="{{ url('produks') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Nama Product</label>
                                <input type="text" name="nama_produk" class="form-control" autofocus required>
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
                                <label>Harga Jual</label>
                                <input type="text" name="harga_jual" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Harga Beli</label>
                                <input type="text" name="harga_beli" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Stock</label>
                                <input type="text" name="stok" class="form-control" autofocus required>
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
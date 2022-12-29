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

        @if (session('status'))
        <div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-success"></span> {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        @endif
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Data Product</strong>
                </div>
                @if (auth()->user()->level == "1")
                <div class="pull-right">
                    <a href="{{ 'produk-add' }}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> Add
                    </a>
                </div>
                @endif
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Product</th>
                            <th>Kode Barang</th>
                            <th>Kategori</th>
                            <th>Merk</th>
                            <th>Harga Jual</th>
                            <th>Harga Beli</th>
                            <th>Stock</th>
                            @if (auth()->user()->level == "1")
                            <th>Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $item)
                            <tr> 
                                <td>{{  $loop->iteration  }}</td>
                                <td>{{ $item->nama_produk }}</td>
                                <td>{{ $item->kode }}</td>
                                <td>{{ $item->kategori->kategori }}</td>
                                <td>{{ $item->merk }}</td>
                                <td>{{ $item->harga_jual }}</td>
                                <td>{{ $item->harga_beli}}</td>
                                <td>{{ $item->stok }}</td>
                                @if (auth()->user()->level == "1")
                                <td class="text-center">
                                    <a href="{{url('produk/produk-edit',$item->id) }}" class="btn btn-primary btn-sm">edit</a>
                                    <form action="{{ url('produkk',$item->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                                @endif
                            </tr>
                    @endforeach
                    </tbody>
                </table>    
            </div>
        </div>
    </div>
        
</div> <!-- .content -->

@endsection
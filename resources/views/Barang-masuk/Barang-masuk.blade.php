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
                    <strong>Data Barang masuk</strong>
                </div>
                @if (auth()->user()->level == "1")
                <div class="pull-right">
                    <a href="{{ url('Barang-masuk/Barang-masuk-add')}}" class="btn btn-success btn-sm">
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
                            <th>Tanggal Barang</th>
                            <th>Kode Barang</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Merk</th>
                            <th>Harga </th>
                            <th>Jumlah</th>
                            <th>Total</th>
                            @if (auth()->user()->level == "1")
                            <th>Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->tanggal_barang}}</td>
                                <td>{{ $item->produk->kode }}</td>
                                <td>{{ $item->produk->nama_produk }}</td>
                                <td>{{ $item->produk->kategori->kategori }}</td>
                                <td>{{ $item->produk->merk }}</td>
                                <td>{{ $item->produk->harga_beli}}</td>
                                <td>{{ $item->jumlah }}</td>
                                <td>{{ $item->jumlah * $item->produk->harga_beli }}</td>
                              
                                @if (auth()->user()->level == "1")
                                <td class="text-center">
                                    <a href="{{ url('Barang-masuk/Barang-masuk-edit', $item->id)}}" class="btn btn-primary btn-sm">edit</a>
                                    <form action="{{ url('Barang-masuk', $item->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
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
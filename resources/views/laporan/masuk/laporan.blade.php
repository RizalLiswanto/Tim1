@extends('main')
@section('tittle', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Rekap Laporan Barang Masuk</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"></li>
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
            <div class="alert alert-success">
               {{ session('status') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Rekap Laporan Barang Masuk</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('laporan-masuk/pdf') }}" target="_blank" class="btn btn-info btn-sm">
                        <i class="fa fa-file"></i> Export PDF
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Masuk</th>
                            <th>Kode Barang</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Merk</th>
                            <th>Harga Beli</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item )
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->tanggal_barang }}</td>
                            <td>{{ $item->produk->kode }}</td>
                            <td>{{ $item->produk->nama_produk }}</td>
                            <td>{{ $item->produk->kategori->kategori }}</td>
                            <td>{{ $item->produk->merk }}</td>
                            <td>{{ $item->produk->formatRupiah('harga_beli') }}</td>
                            <td>{{ $item->jumlah }}</td>
                            <input type="hidden" value="{{ $total = $item->produk->harga_beli * $item->jumlah }}">
                            <td>{{ formatRupiah($total) }}</td>
                    @endforeach
                    </tbody>
                </table>    
            </div>
        </div>
    </div>
        
</div> <!-- .content -->

@endsection
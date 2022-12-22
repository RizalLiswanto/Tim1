@extends('main')
@section('tittle', 'Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Penjualan</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Penjualan</li>
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
                    <strong>Data Penjualan</strong>
                </div>
                @if (auth()->user()->level == "1")
                <div class="pull-right">
                    <a href="{{ url('penjualan/add')}}" class="btn btn-success btn-sm">
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
                            <th>ID Member</th>
                            <th>Total Item</th>
                            <th>Total harga</th>
                            <th>Diskon</th>
                            <th>Bayar</th>
                            <th>Diterima</th>
                            <th>ID User</th>
                            @if (auth()->user()->level == "1")
                            <th></th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penjualan as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->id_member }}</td>
                                <td>{{ $item->total_item }}</td>
                                <td>{{ $item->total_harga }}</td>
                                <td>{{ $item->diskon }}</td>
                                <td>{{ $item->bayar }}</td>
                                <td>{{ $item->diterima }}</td>
                                <td>{{ $item->id_user }}</td>
                                @if (auth()->user()->level == "1")
                                <td class="text-center">
                                    <a href="{{ url('penjualan/edit', $item->id_penjualan)}}" class="btn btn-primary btn-sm">edit</a>
                                    <form action="{{ url('penjualan', $item->id_penjualan)}}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
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
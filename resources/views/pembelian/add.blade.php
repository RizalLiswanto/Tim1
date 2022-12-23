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
                    <li class="active">Pembelian</li>
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
                    <strong>Tambah Pembelian</strong>
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
                        <form action="{{ url('pembelian')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>ID Supplier</label>
                                <input type="text" name="id_supplier" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Total Item</label>
                                <input type="text" name="total_item" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Total Harga</label>
                                <input type="text" name="total_harga" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Diskon</label>
                                <input type="text" name="diskon" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Bayar</label>
                                <input type="text" name="bayar" class="form-control" autofocus required>
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
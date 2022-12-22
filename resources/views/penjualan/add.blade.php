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


        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Tambah Penjualan</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('penjualan')}}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('penjualan')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>ID Member</label>
                                <input type="text" name="id_member" class="form-control" autofocus required>
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
                            <div class="form-group">
                                <label>Diterima</label>
                                <input type="text" name="diterima" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>ID User</label>
                                <input type="text" name="id_user" class="form-control" autofocus required>
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
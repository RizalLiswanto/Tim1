<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title class="text-center">Laporan Kategori</title>
</head>
<body>
    <h3 class="text-center" align="center">LAPORAN BARANG MASUK</h3>
    <div class="form-group">
    <table class="table table-striped table-hover table-bordered" align="center" rules="all" border="1px" style="width:95%;">
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
        <tbody align="center">
            @foreach ($data as $item )
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->tanggal_barang }}</td>
                <td>{{ $item->produk->kode }}</td>
                <td>{{ $item->produk->nama_produk }}</td>
                <td>{{ $item->produk->kategori->kategori }}</td>
                <td>{{ $item->produk->merk }}</td>
                <td>{{ $item->produk->harga_beli }}</td>
                <td>{{ $item->jumlah }}</td>
                <td>{{ $item->produk->harga_beli * $item->jumlah }}</td>
        @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title class="text-center">Laporan Kategori</title>
</head>
<body>
    <h3 class="text-center" align="center">LAPORAN BARANG KELUAR</h3>
    <div class="form-group">
    <table class="table table-striped table-hover table-bordered" align="center" rules="all" border="1px" style="width:95%;">
    </tbody>
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal Keluar</th>
            <th>Kode Barang</th>
            <th>Nama Produk</th>
            <th>Kategori</th>
            <th>Merk</th>
            <th>Harga Jual</th>
            <th>Jumlah</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody align="center">
        @foreach ($data as $item )
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->tanggal }}</td>
            <td>{{ $item->produk->kode }}</td>
            <td>{{ $item->produk->nama_produk }}</td>
            <td>{{ $item->produk->kategori->kategori }}</td>
            <td>{{ $item->produk->merk }}</td>
            <td>{{ $item->produk->formatRupiah('harga_jual') }}</td>
            <td>{{ $item->jumlah_keluar }}</td>
            <input type="hidden" value="{{ $total = $item->produk->harga_jual * $item->jumlah_keluar }}">
            <td>{{ formatRupiah($total) }}</td>
    @endforeach
    </tbody> 
    </table>
    </div>
</body>
</html>
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\pembelian;

class PembelianController extends Controller
{
    public function index()
    {
        $pembelian = pembelian::all();
        return view('pembelian.data', ['pembelian' => $pembelian]);
        //return $edulevels;
    }

    public function add()
    {
        return view('pembelian.add');
    }

    public function addProcess(Request $request)
    {
        $total = $request->harga * $request->jumlah;
        DB::table('pembelian')->insert([
            'tanggal' => $request->tanggal,
            'kode' => $request->kode,
            'nama_supplier' => $request->nama_supplier,
            'kategori_produk' => $request->kategori_produk,
            'nama_produk' => $request->nama_produk,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'total' => $total,
        ]);
        return redirect('pembelian')->with('status', 'Pembelian Berhasil ditambah!');
    }

    public function edit($id)
    {
        $pembelian = DB::table('pembelian')->where('id', $id)->first();
        return view('pembelian.edit', compact('pembelian'));
        dd($pembelian);
    }

    public function editProcess(Request $request, $id)
    {
        $total = $request->harga * $request->jumlah;
        DB::table('pembelian')->where('id', $id)
            ->update([
                'tanggal' => $request->tanggal,
                'kode' => $request->kode,
                'nama_supplier' => $request->nama_supplier,
                'kategori_produk' => $request->kategori_produk,
                'nama_produk' => $request->nama_produk,
                'jumlah' => $request->jumlah,
                'harga' => $request->harga,
                'total' => $total,
            ]);
            return redirect('pembelian')->with('status', 'Pembelian Berhasil diedit!');
    }

    public function delete($id)
    {
        DB::table('pembelian')->where('id', $id)->delete();
        return redirect('pembelian')->with('status', 'Pembelian Berhasil dihapus!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\pengeluaran;
use App\Models\produk;

class PengeluaranController extends Controller
{
    public function index()
    {
        $pengeluaran = pengeluaran::with('produk','kategori')->paginate(10);
        return view('pengeluaran.data', ['pengeluaran' => $pengeluaran]);
        //return $edulevels;
    }

    public function add()
    {
        $pro = produk::all();
        $pengeluaran = pengeluaran::with('produk');
        return view('pengeluaran.add', compact('pengeluaran','pro'));
    }

    public function addProcess(Request $request)
    {

        DB::table('pengeluaran')->insert([
            'tanggal' => $request->tanggal,
            'produk_id' => $request->produk_id,
            'jumlah' => $request->jumlah,
        ]);

        DB::table('produk')->where('id', $request->produk_id)
            ->update([
            'stok' => $request->stok - $request->jumlah,
            ]);
        return redirect('pengeluaran')->with('status', 'Pengeluaran Berhasil ditambah!');
    }

    public function edit($id)
    {
        $pro = produk::all();
        $pengeluaran = pengeluaran::with('produk')->findorfail($id);
        return view('pengeluaran.edit', compact('pengeluaran','pro'));
        dd($pengeluaran);
    }

    public function editProcess(Request $request, $id)
    {

        DB::table('pengeluaran')->where('id', $id)
            ->update([
            'tanggal' => $request->tanggal,
            'produk_id' => $request->produk_id,
            'jumlah' => $request->jumlah,
            ]);
            DB::table('produk')->where('id', $request->produk_id)
            ->update([
            'stok' => $request->stok - ($request->jumlah - $request->old_jumlah),
            ]);
            return redirect('pengeluaran')->with('status', 'Pengeluaran Berhasil diedit!');
    }

    public function delete(Request $request,$id)
    {
        DB::table('produk')->where('id', $request->produk_id)
            ->update([
            'stok' => $request->stok + $request->jumlah,
            ]);
        DB::table('pengeluaran')->where('id', $id)->delete();
        return redirect('pengeluaran')->with('status', 'Pengeluaran Berhasil dihapus!');
    }
}

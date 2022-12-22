<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembelianController extends Controller
{
    public function data()
    {
        $pembelian = DB::table('pembelian')->get();
        return view('pembelian.data', ['pembelian' => $pembelian]);
        //return $edulevels;
    }

    public function add()
    {
        return view('pembelian.add');
    }

    public function addProcess(Request $request)
    {
        DB::table('pembelian')->insert([
            'id_supplier' => $request->id_supplier,
            'total_item' => $request->total_item,
            'total_harga' => $request->total_harga,
            'diskon' => $request->diskon,
            'bayar' => $request->bayar
        ]);
        return redirect('pembelian')->with('status', 'Pembelian Berhasil ditambah!');
    }

    public function edit($id)
    {
        $pembelian = DB::table('pembelian')->where('id_pembelian', $id)->first();
        return view('pembelian.edit', compact('pembelian'));
        dd($pembelian);
    }

    public function editProcess(Request $request, $id)
    {
        DB::table('pembelian')->where('id_pembelian', $id)
            ->update([
                'id_supplier' => $request->id_supplier,
                'total_item' => $request->total_item,
                'total_harga' => $request->total_harga,
                'diskon' => $request->diskon,
                'bayar' => $request->bayar
            ]);
            return redirect('pembelian')->with('status', 'Pembelian Berhasil diedit!');
    }

    public function delete($id)
    {
        DB::table('pembelian')->where('id_pembelian', $id)->delete();
        return redirect('pembelian')->with('status', 'Pembelian Berhasil dihapus!');
    }
}

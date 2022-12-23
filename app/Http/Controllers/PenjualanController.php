<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    public function data()
    {
        $penjualan = DB::table('penjualan')->get();
        return view('penjualan.data', ['penjualan' => $penjualan]);
        //return $edulevels;
    }

    public function add()
    {
        return view('penjualan.add');
    }

    public function addProcess(Request $request)
    {
        DB::table('penjualan')->insert([
            'id_member' => $request->id_member,
            'total_item' => $request->total_item,
            'total_harga' => $request->total_harga,
            'diskon' => $request->diskon,
            'bayar' => $request->bayar,
            'diterima' => $request->diterima,
            'id_user' => $request->id_user
        ]);
        return redirect('penjualan')->with('status', 'Penjualan Berhasil ditambah!');
    }

    public function edit($id)
    {
        $penjualan = DB::table('penjualan')->where('id_penjualan', $id)->first();
        return view('penjualan.edit', compact('penjualan'));
        dd($penjualan);
    }

    public function editProcess(Request $request, $id)
    {
        DB::table('penjualan')->where('id_penjualan', $id)
            ->update([
                'id_member' => $request->id_member,
                'total_item' => $request->total_item,
                'total_harga' => $request->total_harga,
                'diskon' => $request->diskon,
                'bayar' => $request->bayar,
                'diterima' => $request->diterima,
                'id_user' => $request->id_user

            ]);
            return redirect('penjualan')->with('status', 'Penjualan Berhasil diedit!');
    }

    public function delete($id)
    {
        DB::table('penjualan')->where('id_penjualan', $id)->delete();
        return redirect('penjualan')->with('status', 'Penjualan Berhasil dihapus!');
    }
}

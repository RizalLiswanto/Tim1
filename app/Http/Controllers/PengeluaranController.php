<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengeluaranController extends Controller
{
    public function data()
    {
        $pengeluaran = DB::table('pengeluaran')->get();
        return view('pengeluaran.data', ['pengeluaran' => $pengeluaran]);
        //return $edulevels;
    }

    public function add()
    {
        return view('pengeluaran.add');
    }

    public function addProcess(Request $request)
    {
        DB::table('pengeluaran')->insert([
            'deskripsi' => $request->deskripsi,
            'nominal' => $request->nominal
        ]);
        return redirect('pengeluaran')->with('status', 'Pengeluaran Berhasil ditambah!');
    }

    public function edit($id)
    {
        $pengeluaran = DB::table('pengeluaran')->where('id_pengeluaran', $id)->first();
        return view('pengeluaran.edit', compact('pengeluaran'));
        dd($pengeluaran);
    }

    public function editProcess(Request $request, $id)
    {
        DB::table('pengeluaran')->where('id_pengeluaran', $id)
            ->update([
                'deskripsi' => $request->deskripsi,
                'nominal' => $request->nominal
            ]);
            return redirect('pengeluaran')->with('status', 'Pengeluaran Berhasil diedit!');
    }

    public function delete($id)
    {
        DB::table('pengeluaran')->where('id_pengeluaran', $id)->delete();
        return redirect('pengeluaran')->with('status', 'Pengeluaran Berhasil dihapus!');
    }
}

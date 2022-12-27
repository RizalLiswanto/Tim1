<?php

namespace App\Http\Controllers;

use App\Models\Barangmasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangmasukController extends Controller
{
    public function index()
    {
        $data = Barangmasuk::all(); 
        return view('Barang-masuk/Barang-masuk',['data'=>$data]);
    }

    public function add()
    {   $kate=Barangmasuk::all();
        return view('Barang-masuk/Barang-masuk-add',compact('kate'));
    }
    public function addProcess(Request $request)
    {
        DB::table('barang_masuk')->insert([
            'tanggal_barang'=> $request->tanggal_barang,
            'nama_produk' => $request->nama_produk,
            'kode'=> $request->kode,
            'kategori'=> $request->kategori,
            'merk'=>$request->merk,
            'harga'=>$request->harga,
            'jumlah'=>$request->jumlah,
            'total'=>$request->total,
          
        ]);
        return redirect('Barang-masuk/Barang-masuk')->with('status', 'Barang-masuk Berhasil ditambah!');
    }
    public function edit($id)
    {
        $data= DB::table('barang_masuk')->where('id', $id)->first();
        return view('Barang-masuk/Barang-masuk-edit', compact('data'));
    
    }
    public function editProcess(Request $request, $id)
    {
        DB::table('barang_masuk')->where('id', $id)
            ->update([
                'tanggal_barang'=> $request->tanggal_barang,
                'nama_produk' => $request->nama_produk,
                'kode'=> $request->kode,
                'kategori'=> $request->kategori,
                'merk'=>$request->merk,
                'harga'=>$request->harga,
                'jumlah'=>$request->jumlah,
                'total'=>$request->total,
            ]);
            return redirect('Barang-masuk/Barang-masuk')->with('status', 'Barang masuk Berhasil diedit!');
    }
    public function delete($id)
    {
        DB::table('barang_masuk')->where('id', $id)->delete();
        return redirect('Barang-masuk/Barang-masuk')->with('status', 'Barang masuk Berhasil dihapus!');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProdukController extends Controller
{
    public function index()
    {
        $data = produk::with('kategori')->paginate(10); 
        return view('produk/produk',['data'=>$data]);
       
    }

    public function add()
    {   $kate=kategori::all();
        return view('produk/produk-add',compact('kate'));
    }
    public function addProcess(Request $request)
    {
        $kategori_id = $request->get('kategori_id');

        DB::table('produk')->insert([
            'nama_produk' => $request->nama_produk,
            'kategori_id'=> $request->kategori_id,
            'merk'=>$request->merk,
            'harga_jual'=>$request->harga_jual,
            'harga_beli'=>$request->harga_beli,
            'stok'=>$request->stok,
          
        ]);
        return redirect('produk/produk')->with('status', 'produck Berhasil ditambah!');
    }
    // public function edit($id)
    // {
    //     $kategori = DB::table('kategori')->where('id', $id)->first();
    //     return view('kategori/kategori-edit', compact('kategori'));
    
    // }
    // public function editProcess(Request $request, $id)
    // {
    //     DB::table('kategori')->where('id', $id)
    //         ->update([
    //             'kategori' => $request->kategori
    //         ]);
    //         return redirect('kategori/kategori')->with('status', 'kategori Berhasil diedit!');
    // }

    // public function delete($id)
    // {
    //     DB::table('kategori')->where('id', $id)->delete();
    //     return redirect('kategori/kategori')->with('status', 'Kategori Berhasil dihapus!');
    // }
}

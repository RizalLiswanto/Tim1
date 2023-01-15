<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

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
        try {
            DB::table('produk')->insert([
                'nama_produk' => $request->nama_produk,
                'kode'=> $request->kode,
                'kategori_id'=> $request->kategori_id,
                'merk'=>$request->merk,
                'harga_jual'=>$request->harga_jual,
                'harga_beli'=>$request->harga_beli,
                'stok'=>$request->stok,
              
            ]);
           
        } catch (\Throwable $th) {
            return redirect('produk/produk')->with('error', 'produck sudah ada!');
            
        }
        return redirect('produk/produk')->with('status', 'produck Berhasil ditambah!');
    }
    public function edit($id)
    {
        $kate=kategori::all();
        $data = produk::with('kategori')->findorfail($id);
        return view('produk/produk-edit', compact('data','kate'));
    
    }
    public function editProcess(Request $request, $id)
    {
        DB::table('produk')->where('id', $id)
            ->update([
                'nama_produk' => $request->nama_produk,
                'kode'=> $request->kode,
                'kategori_id'=> $request->kategori_id,
                'merk'=>$request->merk,
                'harga_jual'=>$request->harga_jual,
                'harga_beli'=>$request->harga_beli,
                'stok'=>$request->stok,
                
            ]);
            return redirect('produk/produk')->with('status', 'Produk Berhasil diedit!');
    }

    public function delete($id)
    {
        DB::table('barang_masuk')->where('produk_id', $id)->delete();
        DB::table('pengeluaran')->where('produk_id', $id)->delete();
        DB::table('produk')->where('id', $id)->delete();
        return redirect('produk/produk')->with('status', 'Produk beserta Barang Masuk dan Pengeluaran yang bersangkutan Berhasil dihapus!');
    }
}

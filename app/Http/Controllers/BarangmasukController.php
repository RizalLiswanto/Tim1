<?php

namespace App\Http\Controllers;

use App\Models\Barangmasuk;
use App\Models\kategori;
use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangmasukController extends Controller
{
    public function index()
    {  
        $data = Barangmasuk::with('kategori','produk')->paginate(10); 
        return view('Barang-masuk/Barang-masuk',['data'=>$data]);
    }

    public function add()
    {   $kate=kategori::all();
        $pro=produk::all();
        return view('Barang-masuk/Barang-masuk-add',compact('kate','pro'));
    }
    public function addProcess(Request $request)
    {
        DB::table('barang_masuk')->insert([
            'tanggal_barang'=> $request->tanggal_barang,
            'produk_id' => $request->produk_id,
            'kode_id'=> $request->kode_id,
            'kategori_id'=> $request->kategori_id,
            'merk'=>$request->merk,
            'harga'=>$request->harga,
            'jumlah'=>$request->jumlah,
            'total'=>$request->total,
          
        ]);
        
        return redirect('Barang-masuk/Barang-masuk')->with('status', 'Barang-masuk Berhasil ditambah!');
    }
    public function edit($id)
    {    $kate=kategori::all();
         $pro=produk::all();
        $data = Barangmasuk::with('kategori','produk')->findorfail($id);
        return view('Barang-masuk/Barang-masuk-edit', compact('data','kate','pro'));
    
    }
    public function editProcess(Request $request, $id)
    {
        DB::table('barang_masuk')->where('id', $id)
            ->update([
                'tanggal_barang'=> $request->tanggal_barang,
                'produk_id' => $request->produk_id,
                'kode'=> $request->kode,
                'kategori_id'=> $request->kategori_id,
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

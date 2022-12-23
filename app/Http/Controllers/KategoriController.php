<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        $data = kategori::all(); 
        return view('kategori/kategori',['data'=>$data]);
    }

    public function add()
    {
        return view('kategori/kategori-add');
    }
    public function addProcess(Request $request)
    {
        DB::table('kategori')->insert([
            'kategori' => $request->kategori
          
        ]);
        return redirect('kategori/kategori')->with('status', 'Kategori Berhasil ditambah!');
    }
    public function edit($id)
    {
        $kategori = DB::table('kategori')->where('id', $id)->first();
        return view('kategori/kategori-edit', compact('kategori'));
    
    }
    public function editProcess(Request $request, $id)
    {
        DB::table('kategori')->where('id', $id)
            ->update([
                'kategori' => $request->kategori
            ]);
            return redirect('kategori/kategori')->with('status', 'kategori Berhasil diedit!');
    }

    public function delete($id)
    {
        DB::table('kategori')->where('id', $id)->delete();
        return redirect('kategori/kategori')->with('status', 'Kategori Berhasil dihapus!');
    }
}

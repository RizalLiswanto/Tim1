<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function data()
    {
        $edulevels = DB::table('edulevels')->get();
        return view('edulevels.data', ['edulevels' => $edulevels]);
        //return $edulevels;
    }

    public function add()
    {
        return view('edulevels.add');
    }

    public function addProcess(Request $request)
    {
        DB::table('edulevels')->insert([
            'name' => $request->name,
            'desc' => $request->desc
        ]);
        return redirect('edulevels')->with('status', 'Jenjang Berhasil ditambah!');
    }

    public function edit($id)
    {
        $edulevel = DB::table('edulevels')->where('id', $id)->first();
        return view('edulevels.edit', compact('edulevel'));
        dd($edulevel);
    }

    public function editProcess(Request $request, $id)
    {
        DB::table('edulevels')->where('id', $id)
            ->update([
                'name' => $request->name,
                'desc' => $request->desc
            ]);
            return redirect('edulevels')->with('status', 'Jenjang Berhasil diedit!');
    }

    public function delete($id)
    {
        DB::table('edulevels')->where('id', $id)->delete();
        return redirect('edulevels')->with('status', 'Jenjang Berhasil dihapus!');
    }
}

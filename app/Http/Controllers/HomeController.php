<?php

namespace App\Http\Controllers;

use App\Models\Barangmasuk;
use App\Models\kategori;
use App\Models\produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controllers;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
      $produk = DB::table('produk')->count();
      $kategori = DB::table('kategori')->count();
      $barangmasuk= DB::table('barang_masuk')->count();


        return view('home',compact('produk','kategori','barangmasuk'));
    }
}

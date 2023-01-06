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
use App\Models\pengeluaran;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
      $pengguna = User::count();
      $produk = produk::count();
      $kategori = kategori::count();
      $barangmasuk = Barangmasuk::count();
      $pengeluaran = pengeluaran::count();


        return view('home',compact('pengguna','produk','kategori','barangmasuk','pengeluaran'));
    }
}

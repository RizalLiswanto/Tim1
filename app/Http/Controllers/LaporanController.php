<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\laporan_harian;
use App\Models\pengeluaran;
use App\Models\Barangmasuk;
use App\Models\kategori;
use App\Models\produk;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanController extends Controller
{
    public function index()
    {
        
        $data = kategori::all(); 
        return view('laporan.laporan',['data'=>$data]);

    }

    public function exportPDF()
    {
        $pdf =  PDF::loadView('laporan.pdf');
        $pdf->setPaper('a4', 'potrait');

        return $pdf->stream('Laporan Kategori',  '.pdf');
    }

    public function produk_view()
    {
        
        $data = produk::all();
        return view('laporan.produk.laporan',['data'=>$data]);

    }

    public function produkPDF()
    {
        $pdf =  PDF::loadView('laporan.pdf');
        $pdf->setPaper('a4', 'potrait');

        return $pdf->stream('Laporan Produk',  '.pdf');
    }

    public function masuk_view()
    {
        
        $data = Barangmasuk::all();
        return view('laporan.masuk.laporan',['data'=>$data]);

    }

    public function masukPDF()
    {
        $pdf =  PDF::loadView('laporan.pdf');
        $pdf->setPaper('a4', 'potrait');

        return $pdf->stream('Laporan Produk',  '.pdf');
    }

    public function pengeluaran_view()
    {
        
        $data = pengeluaran::all();
        return view('laporan.keluar.laporan',['data'=>$data]);

    }

    public function keluarPDF()
    {
        $pdf =  PDF::loadView('laporan.pdf');
        $pdf->setPaper('a4', 'potrait');

        return $pdf->stream('Laporan Produk',  '.pdf');
    }
}

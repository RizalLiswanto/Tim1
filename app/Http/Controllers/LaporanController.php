<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laporan;
use \PDF;

class LaporanController extends Controller
{
    public function index()
    {
        $tanggalAwal = date('Y-m-d', mktime(0, 0, 0, date('m'), 1, date('Y')));
        $tanggalAkhir = date('Y-m-d');

        return view('laporan.laporan', compact('tanggalAwal', 'tanggalAkhir'));
    }

    public function exportPDF($awal, $akhir)
    {
        $pdf =  PDF::loadView('laporan.pdf', compact('awal', 'akhir'));
        $pdf->setPaper('a4', 'potrait');

        return $pdf->stream('Lpaoran', date('Y-m-d-his') .'.pdf');
    }
}

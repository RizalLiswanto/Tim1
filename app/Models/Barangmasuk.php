<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barangmasuk extends Model
{
    use HasFactory;
    protected $table = 'barang_masuk';
    protected $primaryKey = "id";
    protected $fillable = [
        'id','nama_produk','tanggal_barang','kode','kategori','merk','harga','jumlah','total'
    ];
}

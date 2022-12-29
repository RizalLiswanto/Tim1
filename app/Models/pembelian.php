<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembelian extends Model
{
    use HasFactory;
    protected $table = 'pembelian';
    protected $primaryKey = "id";
    protected $fillable = [
        'id','tanggal','kode','nama_supplier','kategori_produk','nama_produk','jumlah','harga','total'
    ];
    // public function produk(){
    //     return $this->belongsTo(produk::class);
    // }
}

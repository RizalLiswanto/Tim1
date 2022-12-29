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
        'id','produk_id','tanggal_barang','jumlah'
    ];
    public function kategori(){
        return $this->belongsTo(kategori::class);
    }
    public function produk(){
        return $this->belongsTo(produk::class);
    }
}

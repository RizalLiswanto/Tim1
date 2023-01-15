<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    use HasFormatRupiah;
    protected $table = 'produk';
    protected $primaryKey = "id";
    protected $fillable = [
        'id','nama_produk','kode','kategori_id','merk','harga_jual','harga_beli','stok'
    ];
    public function kategori(){
        return $this->belongsTo(kategori::class);
    }

    public function Barangmasuk(){
        return $this->hasOne(Barangmasuk::class);
    }
    public function pengeluaran(){
        return $this->hasOne(pengeluaran::class);
    }
}

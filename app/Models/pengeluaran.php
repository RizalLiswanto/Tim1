<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengeluaran extends Model
{
    use HasFactory;
    protected $table = 'pengeluaran';
    protected $primaryKey = "id";
    protected $fillable = [
        'id','tanggal','produk_id','jumlah','harga'
    ];
    public function produk(){
        return $this->belongsTo(produk::class);
    }
    public function kategori(){
        return $this->belongsTo(kategori::class);
    }
}

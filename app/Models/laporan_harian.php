<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan_harian extends Model
{
    use HasFactory;
    public $table = 'laporan_harian';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','tanggal'
    ];
    // public function Barangmasuk(){
    //     return $this->hasMany(Barangmasuk::class);
    // }
    // public function pengeluaran(){
    //     return $this->hasMany(pengeluaran::class);
    // }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable = ['id_barang', 'jumlah_barang', 'nama_barang', 'merek_barang', 'kategori', 'spesifikasi'];
    
    public function peminjaman ()
    {
        return $this->hasMany(Peminjaman::class);
    }
}

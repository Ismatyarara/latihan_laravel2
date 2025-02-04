<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $fillable = ['id', 'nama_buku', 'harga', 'stok', 'image', 'id_penerbit', 'tanggal_terbit', 'id_genre'];
    public $timestamps = true;



    public function transaksi()
    {
        return $this->hasMany(transaksi::class);
    }


    // Relasi dengan Penerbit
    public function penerbit()
    {
        return $this->belongsTo(penerbit::class, 'id_penerbit');
    } 
     
    // Relasi dengan Genre
    public function genre()
    {
        return $this->belongsTo(genre::class, 'id_genre');
    }

    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('image/buku/' . $this->foto))) { // Tambah slash "/" setelah "buku"
            return unlink(public_path('image/buku/' . $this->foto));
        }
    }
}

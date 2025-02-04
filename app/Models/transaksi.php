<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'jumlah', 'tanggal_transaksi', 'id_buku', 'id_pembeli'];
    public $timestamps = true;

    // Relasi dengan Penerbit
    public function buku()
    {
        return $this->belongsTo(buku::class, 'id_buku');
    } 
     
    // Relasi dengan Genre
    public function pembeli()
    {
        return $this->belongsTo(pembeli::class, 'id_pembeli');
    }

}

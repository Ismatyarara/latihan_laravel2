<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama_produk','harga','stok','id_kategori'];
    public $timestamp = true;

    //relasi
    public function kategori()
    {
        return $this->belongsTo(kategori::class, 'id_kategori');
    }

     //menghapus image
     public function deleteImage(){
        if ($this->cover && file_exists(public_path('image/produk'.$this->cover))) {
            return unlink(public_path('image/produk'.$this->cover));
        }
    }
}

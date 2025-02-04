<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = ['id','name_product','merk','price','stoct'];
    public $timestamp = true;

    //relasi
    // public function kategori()
    // {
    //     return $this->belongsTo(kategori::class, 'id_kategori');
}

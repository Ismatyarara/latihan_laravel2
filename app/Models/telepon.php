<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telepon extends Model
{
    use HasFactory;

    use HasFactory;
    protected $fillable = ['id','nomor','id_pengguna'];
    public $timestamp = true;

    //relasi
    public function pengguna()
    {
        return $this->belongsTo(pengguna::class, 'id_pengguna');
    }
}

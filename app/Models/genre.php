<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    use HasFactory;
    protected $fillable = ['id','genre'];
    public $timestamp = true;

     //relasi
     public function genre()
     {
         return $this->hasMany(buku::class);
     }
}



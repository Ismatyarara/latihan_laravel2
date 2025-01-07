<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $Barangs = [
            ['nama_barang'=>'mobil','merk'=>'mitsubisi','harga'=> 20000000],
            ['nama_barang'=>'motor','merk'=>'yamaha','harga'=> 5000000],
            ['nama_barang'=>'sepatu','merk'=>'adidas','harga'=> 500000],
            ['nama_barang'=>'lipstik','merk'=>'dior','harga'=>7000000],
            ['nama_barang'=>'parfum','merk'=>'dior','harga'=>10000000],
        ];

        DB::table('Barangs')->insert($Barangs);
    }
}

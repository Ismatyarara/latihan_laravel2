<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Barangs;

class PostController extends Controller
{
    public function menampilkan(){

        $post = Post::all();
        return view('tampil_post', compact('post'));
    }
    public function menampilkan2(){

        $Barangs = Barangs::all();
        return view('tampil_Barang', compact('Barangs'));
    }
}

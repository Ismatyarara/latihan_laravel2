<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;
use App\Models\kategori;


class produkscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = produk::all();
        return view('produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori =kategori::all();
        return view('produk.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produk = new produk;
        $produk->nama_produk= $request->nama_produk;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->id_kategori = $request->id_kategori;
        

        if ($request->hasFile('cover')) {
            $img= $request->file('cover');
            $name = rand(1000,9999). $img->getclientOriginalname();
            $img->move('image/produk', $name);
            $produk->cover =$name;
        }
        $produk->save();
        
       

        return redirect()->route('produk.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk =  produk::findOrFail($id);
        $kategori =  kategori::all();
        return view('produk.show', compact('produk','kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = produk::findOrFail($id);
        $kategori = kategori::all();
        return view('produk.edit', compact('produk', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $produk = produk::findOrFail($id);
        $produk->nama_produk       = $request->nama_produk;
        $produk->harga       = $request->harga;
        $produk->stok       = $request->stok;
        $produk->id_kategori = $request->id_kategori;



        if ($request->hasFile('cover')) {
            $produk->deleteImage();
            $img = $request->file('cover');
            $name = rand(1000,9999).$img->getclientOriginalname();
            $img->move('image/produk', $name);
            $produk->cover =$name;


        $produk->save();
        
        session()->flash('success', 'Data Berhasil Di Rubah');
       

        return redirect()->route('produk.index');
    }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        $produk =  produk::findOrFail($id);
        $produk->delete();
        return redirect()->route('produk.index')->with('success', 'Data Berhasil Dihapus');
    }
}
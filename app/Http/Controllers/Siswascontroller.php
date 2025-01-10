<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class Siswascontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //untuk supaya masuk harus login dulu
   public function __construct()
   {
    $this->middleware('auth');
   }

   //menampilkan data
    public function index()
    {
        $siswa = siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     //menambah data
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //proses penyimpanan
    public function store(Request $request)
    {
        $siswa = new siswa;
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->kelas = $request->kelas;
        $siswa->save();
        
        return redirect()->route('siswa.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //menampilkan data
    public function show($id)
    {
        $siswa =  siswa::findOrFail($id);
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //untuk mengedit data
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //untuk update data
    public function update(Request $request, $id)
    {
        $siswa =  siswa::findOrFail($id);
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->kelas = $request->kelas;
        $siswa->save();
        
        return redirect()->route('siswa.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //untuk menghapus data
    public function destroy($id)
    {
        $siswa =  siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Data berhasil dihapus');
    }
}

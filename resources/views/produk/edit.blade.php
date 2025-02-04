@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Edit Data produk</div>
              <div class="card-body">
              <form action="{{ route('produk.update', $produk->id) }}" method="post" enctype="multipart/form-data">
                @csrf  
                @method('PUT')
                <div class="form-group">
                    <label>nama produk</label>
                    <input type="text" class="form-control" name="nama_produk" value=" {{ $produk->nama_produk }}" >
                </div><br>
                <div class="form-group">
                    <label>harga</label>
                    <input type="number" class="form-control" name="harga" value=" {{ $produk->harga }}" >
                </div><br>
                <div class="form-group">
                    <label>stok</label>
                    <input type="number" class="form-control" name="stok" value=" {{ $produk->stok }}" >
                </div><br>
                <div class="form-group">
                   <label>ID kategori</label>
                   <select class="form-control" name="id_kategori" >
                    @foreach($kategori as $data)
                       <option value=" {{ $data->id}}" {{ $data->id == $produk->id_kategori ? 'selected' : ''}}> {{ $data->nama_kategori}}</option>
                     @endforeach
                   </select>
                </div><br>
                <div class="form-group">
                   <label>cover</label>
                   <img src="{{ asset('/image/produk/'.$produk->cover) }}" width="100" >
                   <input type="file" class="form-control" value="{{ $produk->cover }}" name="cover" required>
                </div><br>
                <button type="submit" class="btn btn-primary">Edit</button>
              </form>
              </div>
         </div>
        </div>
    </div>
</div>
@endsection

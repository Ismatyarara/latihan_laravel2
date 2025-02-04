@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Tambah BUKU</div>
              <div class="card-body">

              <!-- Notifikasi Error -->
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif

              <form action="{{ route('buku.store') }}" method="post" enctype="multipart/form-data">
                @csrf  
                <div class="form-group">
                    <label>Nama buku</label>
                    <input type="text" class="form-control" name="nama_buku" value="{{ old('nama_buku') }}">
                </div><br>

                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" class="form-control" name="harga" value="{{ old('harga') }}">
                </div><br>

                <div class="form-group">
                    <label>Stok</label>
                    <input type="number" class="form-control" name="stok" value="{{ old('stok') }}">
                </div><br>

                <div class="form-group">
                    <label>image</label>
                    <input type="file" class="form-control" name="image" required>
                </div><br>

                <div class="form-group">
                    <label>ID Penerbit</label>
                    <select class="form-control" name="id_penerbit">
                        @foreach($penerbit as $data)
                           <option value="{{ $data->id }}">{{ $data->nama_penerbit }}</option>
                        @endforeach
                    </select>
                </div><br>

                <div class="form-group">
                    <label>Tanggal Terbit</label>
                    <input type="date" class="form-control" name="tanggal_terbit" value="{{ old('tanggal_terbit') }}">
                </div><br>

                <div class="form-group">
                    <label>ID Genre</label>
                    <select class="form-control" name="id_genre">
                        @foreach($genre as $data)
                           <option value="{{ $data->id }}">{{ $data->genre }}</option>
                        @endforeach
                    </select>
                </div><br>

                <button type="submit" class="btn btn-primary">Save</button>
              </form>

              </div>
            </div>
        </div>
    </div>
</div>
@endsection

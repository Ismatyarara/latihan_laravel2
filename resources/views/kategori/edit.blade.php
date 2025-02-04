@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Update Kategori</div>
              <div class="card-body">
              <form action="{{ route('kategori.update', $kategori->id) }}" method="post" enctype="multipart/form-data">
                @csrf  
                @method('PUT')
                 <div class="form-group">
                    <label>id</label>
                    <input type="number" class="form-control" name="id"  value="{{ $kategori->id }}"required>
                </div> 
                <div class="form-group">
                    <label>Nama Kategori</label>
                    <input type="text" class="form-control" name="nama_kategori"  value="{{ $kategori->nama_kategori }}" required>
                </div><br>
                <button type="submit" class="btn btn-primary">Update</button>
              </form>
              </div>
         </div>
        </div>
    </div>
</div>
@endsection

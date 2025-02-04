@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Show Kategori</div>
              <div class="card-body">
              <form action="{{ route('kategori.show', $kategori->id) }}" method="post" enctype="multipart/form-data">
                @csrf  
                @method('PUT')
                <div class="form-group">
                    <label>id</label>
                    <input type="number" class="form-control" name="id" value="{{ $kategori->id }}"  required  disabled>
                </div> 
                <div class="form-group">
                    <label>Nama Kategori</label>
                    <input type="text" class="form-control" name="nama_kategori" value="{{ $kategori->nama_kategori }}"  required  disabled>
                </div><br>
                <a href="{{ route('kategori.index') }}" class="btn btn-primary">Back</a>
              </form>
              </div>
         </div>
        </div>
    </div>
</div>
@endsection

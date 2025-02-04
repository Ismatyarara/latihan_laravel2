@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header"> SHOW PEMBELI</div>
              <div class="card-body">
              <form action="{{ route('pembeli.show', $pembeli->id) }}" method="post" enctype="multipart/form-data">
                @csrf  
                @method('PUT')
                
                <div class="form-group">
                    <label>Nama pembeli</label>
                    <input type="text" class="form-control" name="nama_pembeli"  value="{{ $pembeli->nama_pembeli }}"required disabled>
                </div><br>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-laki" required disabled>Laki-laki
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan" required disabled>Perempuan 
                </div><br>
                <div class="form-group">
                    <label>Telepon</label>
                    <input type="number" class="form-control" name="telepon" value="{{ $pembeli->telepon }}"disabled >
                </div><br>
                <a href="{{ route('pembeli.index') }}" class="btn btn-primary">Back</a>
              </form>
              </div>
         </div>
        </div>
    </div>
</div>
@endsection

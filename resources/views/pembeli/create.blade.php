@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Tambah PEMBELI</div>
              <div class="card-body">
              <form action="{{ route('pembeli.store') }}" method="post" enctype="multipart/form-data">
                @csrf  
            
                <div class="form-group">
                    <label>Nama pembeli</label>
                    <input type="text" class="form-control" name="nama_pembeli" required>
                </div><br>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-laki" required>Laki-laki
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan" required>Perempuan 
                </div><br>
                <div class="form-group">
                    <label>Telepon</label>
                    <input type="number" class="form-control" name="telepon" >
                </div><br>
                <button type="submit" class="btn btn-primary">Save</button>
              </form>
              </div>
         </div>
        </div>
    </div>
</div>
@endsection

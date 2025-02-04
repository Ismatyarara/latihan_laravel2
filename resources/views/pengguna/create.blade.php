@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Tambah Pengguna</div>
              <div class="card-body">
              <form action="{{ route('pengguna.store') }}" method="post" enctype="multipart/form-data">
                @csrf  
                 <div class="form-group">
                    <label>id</label>
                    <input type="number" class="form-control" name="id" required>
                </div> 
                <div class="form-group">
                    <label>Nama Pengguna</label>
                    <input type="text" class="form-control" name="nama_pengguna" required>
                </div><br>
                </div><br>
                <button type="submit" class="btn btn-primary">Save</button>
              </form>
              </div>
         </div>
        </div>
    </div>
</div>
@endsection

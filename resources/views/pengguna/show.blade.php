@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Show Pengguna</div>
              <div class="card-body">
              <form action="{{ route('pengguna.show', $pengguna->id) }}" method="post" enctype="multipart/form-data">
                @csrf  
                @method('PUT')
                 <div class="form-group">
                    <label>id</label>
                    <input type="number" class="form-control"  value="{{ $pengguna->id }}" name="id" required disabled>
                </div>  
                <div class="form-group">
                    <label>Nama Pengguna</label>
                    <input type="text" class="form-control"  value="{{ $pengguna->nama_pengguna }}" name="nama_pengguna" required disabled>
                </div><br>
                </div><br>
                <a href="{{ route('pengguna.index') }}" class="btn btn-primary">Back</a>
              </form>
              </div>
         </div>
        </div>
    </div>
</div>
@endsection


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Show Pengguna</div>
              <div class="card-body">
              <form action="{{ route('telepon.update', $telepon->id) }}" method="post" enctype="multipart/form-data">
                @csrf  
                @method('PUT')
                <div class="form-group">
                    <label>Nomer</label>
                    <input type="number" class="form-control" name="nomor" value="{{ $telepon->nomor }}" disabled >
                </div><br>
                <div class="form-group">
                   <label>ID Pengguna</label>
                   <select class="form-control" name="id_pengguna" disabled>
                    @foreach($pengguna as $data)
                       <option value=" {{ $data->id}}" {{ $data->id == $telepon->id_pengguna ? 'selected' : ''}}> {{ $data->nama_pengguna}}</option>
                     @endforeach
                   </select>
                </div><br>
                <a href="{{ route('telepon.index') }}" class="btn btn-primary">Back</a>
              </form>
              </div>
         </div>
        </div>
    </div>
</div>
@endsection

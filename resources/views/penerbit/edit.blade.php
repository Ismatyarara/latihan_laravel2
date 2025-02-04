@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Update Penerbit</div>
              <div class="card-body">
              <form action="{{ route('penerbit.update', $penerbit->id) }}" method="post" enctype="multipart/form-data">
                @csrf  
                @method('PUT')
                 <div class="form-group">
                    <label>id</label>
                    <input type="number" class="form-control" name="id"  value="{{ $penerbit->id }}"required>
                </div> 
                <div class="form-group">
                    <label>Nama penerbit</label>
                    <input type="text" class="form-control" name="nama_penerbit"  value="{{ $penerbit->nama_penerbit }}" required>
                </div><br>
                <button type="submit" class="btn btn-primary">Update</button>
              </form>
              </div>
         </div>
        </div>
    </div>
</div>
@endsection

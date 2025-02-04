@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Show Genre</div>
              <div class="card-body">
              <form action="{{ route('genre.show', $genre->id) }}" method="post" enctype="multipart/form-data">
                @csrf  
                @method('PUT')
                 <div class="form-group">
                    <label>id</label>
                    <input type="number" class="form-control"  value="{{ $genre->id }}" name="id" required disabled>
                </div>  
                <div class="form-group">
                    <label>Genre</label>
                    <input type="text" class="form-control"  value="{{ $genre->genre }}" name="genre" required disabled>
                </div><br>
                </div><br>
                <a href="{{ route('genre.index') }}" class="btn btn-primary">Back</a>
              </form>
              </div>
         </div>
        </div>
    </div>
</div>
@endsection

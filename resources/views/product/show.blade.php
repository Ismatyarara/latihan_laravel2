@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Show product</div>
              <div class="card-body">
              <form action="{{ route('product.show', $product->id) }}" method="post" enctype="multipart/form-data">
                @csrf  
                @method('PUT')
                <div class="form-group">
                    <label>Name product</label>
                    <input type="text" class="form-control" name="name_product" value="{{ $product->name_product }}"  required  disabled>
                </div><br>
                <div class="form-group">
                    <label>Merk</label>
                    <input type="text" class="form-control" name="merk" value="{{ $product->merk }}" required disabled>
                </div><br>
                <div class="form-group">
                    <label>Price</label>
                    <input type="number" class="form-control" name="price" value="{{ $product->price }}"required disabled>
                </div><br>
                <div class="form-group">
                    <label>stoct</label>
                    <input type="number" class="form-control" name="stoct" value="{{ $product->stoct }}" required disabled>
                </div><br>
                <a href="{{ route('product.index') }}" class="btn btn-primary">Back</a>
              </form>
              </div>
         </div>
        </div>
    </div>
</div>
@endsection

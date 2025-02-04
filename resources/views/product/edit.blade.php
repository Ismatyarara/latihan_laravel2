@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Update product</div>
              <div class="card-body">
              <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                @csrf  
                @method('PUT')
                <div class="form-group">
                    <label>Name product</label>
                    <input type="text" class="form-control" name="name_product" required>
                </div><br>
                <div class="form-group">
                    <label>Merk</label>
                    <input type="text" class="form-control" name="merk" required>
                </div><br>
                <div class="form-group">
                    <label>Price</label>
                    <input type="number" class="form-control" name="price" required>
                </div><br>
                <div class="form-group">
                    <label>stoct</label>
                    <input type="number" class="form-control" name="stoct" required>
                </div><br>
                <button type="submit" class="btn btn-primary">Update</button>
              </form>
              </div>
         </div>
        </div>
    </div>
</div>
@endsection

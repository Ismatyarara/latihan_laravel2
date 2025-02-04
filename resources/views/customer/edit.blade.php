@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Update customer</div>
              <div class="card-body">
              <form action="{{ route('customer.update', $customer->id) }}" method="post" enctype="multipart/form-data">
                @csrf  
                @method('PUT')
                <div class="form-group">
                    <label>Name customer</label>
                    <input type="text" class="form-control" name="name_customer" required>
                </div><br>
                <div class="form-group">
                    <label>Gender :</label>
                    <input type="radio" class="form-check-input" name="gender" value="Laki-laki" required>Laki-laki
                    <input type="radio" class="form-check-input" name="gender" value="Perempuan" required>Perempuan 
                </div><br>
                <div class="form-group">
                    <label>Contact</label>
                    <input type="number" class="form-control" name="contact" required>
                </div><br>
                <button type="submit" class="btn btn-primary">Update</button>
              </form>
              </div>
         </div>
        </div>
    </div>
</div>
@endsection

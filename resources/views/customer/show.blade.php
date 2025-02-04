@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Show customer</div>
              <div class="card-body">
              <form action="{{ route('customer.show', $customer->id) }}" method="post" enctype="multipart/form-data">
                @csrf  
                @method('PUT')
                <div class="form-group">
                    <label>Name customer</label>
                    <input type="text" class="form-control" name="name_customer" value="{{ $customer->name_customer }}"  required  disabled>
                </div><br>
                <div class="form-group">
                    <label>Gender :</label>
                    <input type="radio" class="form-check-input" name="gender" value="Laki-laki" required>Laki-laki
                    <input type="radio" class="form-check-input" name="gender" value="Perempuan" required>Perempuan 
                </div><br>
                <div class="form-group">
                    <label>Contact</label>
                    <input type="number" class="form-control" name="contact"value="{{ $customer->contact }}" required disabled>
                </div><br>
                <a href="{{ route('customer.index') }}" class="btn btn-primary">Back</a>
              </form>
              </div>
         </div>
        </div>
    </div>
</div>
@endsection

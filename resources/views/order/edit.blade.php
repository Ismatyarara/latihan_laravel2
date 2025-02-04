@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Edit Data order</div>
              <div class="card-body">
              <form action="{{ route('order.update', $order->id) }}" method="post" enctype="multipart/form-data">
                @csrf  
                @method('PUT')
                <div class="form-group">
                   <label>ID Product</label>
                   <select class="form-control" name="id_product" >
                    @foreach($product as $data)
                       <option value=" {{ $data->id}}" {{ $data->id == $order->id_product ? 'selected' : ''}}> {{ $data->name_product}}</option>
                     @endforeach
                   </select>
                </div><br>
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="number" class="form-control" name="quantity" >
                </div><br>
                <div class="form-group">
                    <label>Order Date</label>
                    <input type="date" class="form-control" name="order_date" >
                </div><br>
                <div class="form-group">
                   <label>ID customer</label>
                   <select class="form-control" name="id_customer" >
                    @foreach($customer as $data)
                       <option value=" {{ $data->id}}" {{ $data->id == $order->id_customer ? 'selected' : ''}}> {{ $data->name_customer}}</option>
                     @endforeach
                   </select>
                </div><br>
                <button type="submit" class="btn btn-primary">Edit</button>
              </form>
              </div>
         </div>
        </div>
    </div>
</div>
@endsection

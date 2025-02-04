@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Show Data transaksi</div>
              <div class="card-body">
              <form action="{{ route('transaksi.show', $transaksi->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                    <label>jumlah</label>
                    <input type="number" class="form-control" name="jumlah" value="{{ $transaksi->jumlah }}" required disabled>
                </div><br>
                <div class="form-group">
                    <label>Tanggal transaksi</label>
                    <input type="date" class="form-control" name="tanggal_transaksi" value="{{ $transaksi->tanggal_transaksi }}" required disabled>
                </div><br>
                <div class="form-group">
                    <label>ID buku</label>
                    <select class="form-control" name="id_buku"  value="{{ $transaksi->id_buku }}" required disabled>
                        @foreach($buku as $data)
                           <option value="{{ $data->id }}">{{ $data->nama_buku }}</option>
                        @endforeach
                    </select>
                </div><br>
                <div class="form-group">
                    <label>ID pembeli</label>
                    <select class="form-control" name="id_pembeli"  value="{{ $transaksi->id_pembeli }}" required disabled>
                        @foreach($pembeli as $data)
                           <option value="{{ $data->id }}">{{ $data->nama_pembeli }}</option>
                        @endforeach
                    </select>
                </div><br>
  <br>
   <a href="{{ route('transaksi.index') }}" class="btn btn-primary">Back</a>
</form>
 </div>


            </div>
        </div>
    </div>
</div>
@endsection
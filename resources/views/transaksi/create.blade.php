@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Tambah transaksi</div>
              <div class="card-body">

              <!-- Notifikasi Error -->
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif

              <form action="{{ route('transaksi.store') }}" method="post" enctype="multipart/form-data">
                @csrf  
            
                <div class="form-group">
                    <label>jumlah</label>
                    <input type="number" class="form-control" name="jumlah" value="{{ old('jumlah') }}">
                </div><br>
                <div class="form-group">
                    <label>Tanggal transaksi</label>
                    <input type="date" class="form-control" name="tanggal_transaksi" value="{{ old('tanggal_transaksi') }}">
                </div><br>
                <div class="form-group">
                    <label>ID buku</label>
                    <select class="form-control" name="id_buku">
                        @foreach($buku as $data)
                           <option value="{{ $data->id }}">{{ $data->nama_buku }}</option>
                        @endforeach
                    </select>
                </div><br>
                <div class="form-group">
                    <label>ID pembeli</label>
                    <select class="form-control" name="id_pembeli">
                        @foreach($pembeli as $data)
                           <option value="{{ $data->id }}">{{ $data->nama_pembeli }}</option>
                        @endforeach
                    </select>
                </div><br>
                <button type="submit" class="btn btn-primary">Save</button>
              </form>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection

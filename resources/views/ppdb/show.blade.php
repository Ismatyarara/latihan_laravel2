@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header"> SHOW PPDB</div>
              <div class="card-body">
              <form action="{{ route('ppdb.show', $ppdb->id) }}" method="post" enctype="multipart/form-data">
                @csrf  
                @method('PUT')
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" value="{{ $ppdb->nama_lengkap }}" name="nama_lengkap" required disabled>
                </div><br>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input type="radio" class="form-check-input" value="{{ $ppdb->jenis_kelamin }}" name="jenis_kelamin" value="Laki-laki" required disabled>Laki-laki
                    <input type="radio" class="form-check-input" value="{{ $ppdb->jenis_kelamin }}" name="jenis_kelamin" value="Perempuan" required disabled>Perempuan 
                </div><br>
                <div class="form-group">
                   <label>Agama</label>
                   <select class="form-control" value="{{ $ppdb->agama }}" name="agama" required disabled>
                       <option value="ISLAM">ISLAM</option>
                       <option value="KRISTEN">KRISTEN</option>
                       <option value="HINDU">HINDU</option>
                       <option value="BUDHA">BUDHA</option>
                       <option value="KONGHUCU">KONGHUCU</option>
                   </select>
                </div><br>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="textarea" class="form-control" value="{{ $ppdb->alamat }}" name="alamat" required disabled>
                </div><br>
                <div class="form-group">
                <label for="telepon" class="form-label">Telepon</label>
                <input type="text" class="form-control" value="{{ $ppdb->telepon }}"  id="telepon" name="telepon" required disabled>
                </div><br>
                <div class="form-group">
                    <label>Asal Sekolah</label>
                    <input type="text" class="form-control" value="{{ $ppdb->asal_sekolah }}"  name="asal_sekolah" required disabled>
                </div><br>
                <a href="{{ route('ppdb.index') }}" class="btn btn-primary">Back</a>
              </form>
              </div>
         </div>
        </div>
    </div>
</div>
@endsection

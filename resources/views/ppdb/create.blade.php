@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Tambah PPDB</div>
              <div class="card-body">
              <form action="{{ route('ppdb.store') }}" method="post" enctype="multipart/form-data">
                @csrf  
            
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" required>
                </div><br>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-laki" required>Laki-laki
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan" required>Perempuan 
                </div><br>
                <div class="form-group">
                   <label>Agama</label>
                   <select class="form-control" name="agama" required>
                       <option value="ISLAM">ISLAM</option>
                       <option value="KRISTEN">KRISTEN</option>
                       <option value="HINDU">HINDU</option>
                       <option value="BUDHA">BUDHA</option>
                       <option value="KONGHUCU">KONGHUCU</option>
                   </select>
                </div><br>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="textarea" class="form-control" name="alamat" required>
                </div><br>
                <div class="form-group">
                <label for="telepon" class="form-label">Telepon</label>
                <input type="text" class="form-control" id="telepon" name="telepon" required>
                </div><br>
                <div class="form-group">
                    <label>Asal Sekolah</label>
                    <input type="text" class="form-control" name="asal_sekolah" required>
                </div><br>
                <button type="submit" class="btn btn-primary">Save</button>
              </form>
              </div>
         </div>
        </div>
    </div>
</div>
@endsection

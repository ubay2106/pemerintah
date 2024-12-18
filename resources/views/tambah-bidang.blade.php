@extends('layout.admin')
@section('content')

<form class="card" action="/bidang/tambah-bidang" method="POST">
    @csrf
    <div class="card-header">
        <h4>Tambah Bidang</h4>
    </div>
    <div class="card-body">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nama Bidang</label>
            <input type="text" class="form-control" name="nama_bidang" id="formGroupExampleInput" placeholder="Input">
          </div>
          <div class="card-footer">
            <button class="btn btn-primary" type="submit">Simpan</button>
            <a href="/bidang" class="btn btn-danger">Kembali</a>
          </div>
    </div>
</form>
    
@endsection
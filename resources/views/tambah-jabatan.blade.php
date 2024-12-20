@extends('layout.admin')
@section('content')
    <form class="card" action="/jabatan/tambah-jabatan" method="POST">
        @csrf
        <div class="card-header">
            <h4>Tambah jabatan</h4>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nama jabatan</label>
                <input type="text" class="form-control" name="nama_jabatan" id="formGroupExampleInput" placeholder="Input" required>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary" type="submit">Simpan</button>
                <a href="/jabatan" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </form>
@endsection

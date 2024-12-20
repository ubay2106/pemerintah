@extends('layout.admin')
@section('content')
    <form class="card" action="/jabatan/{{ $detail->id }}/edit-jabatan" method="POST">
        @csrf
        <div class="card-header">
            <h4>Edit Jabatan</h4>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nama Jabatan</label>
                <input type="text" class="form-control" name="nama_jabatan" value="{{ $detail->nama_jabatan }}"
                    id="formGroupExampleInput" placeholder="Input" required>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary" type="submit">Simpan</button>
                <a href="/jabatan" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </form>
@endsection

@extends('layout.admin')
@section('content')
    <form class="card" action="/pemerintah/tambah-pemerintah" method="POST">
        @csrf
        <div class="card-header">
            <h4>Tambah Pemerintah</h4>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Nama Pemerintah</label>
                <input type="text" class="form-control" name="nama" id="formGroupExampleInput" placeholder="Input" required>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="formGroupExampleInput" placeholder="Input" required>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Jenis Kelamin</label>
                <select name="jk" id="jk" class="form-control" required>
                    <option value="" disabled selected>Pilih Jenis Kelamin</option>
                    <option>laki-laki</option>
                    <option>perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Bidang</label>
                <select name="bidang_id" id="bidang_id" class="form-control" required>
                    <option value="" disabled selected>Pilih Bidang</option>
                    @foreach ($bidang as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_bidang }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Jabatan</label>
                <select name="jabatan_id" id="jabatan_id" class="form-control" required>
                    <option value="" disabled selected>Pilih Jabatan</option>
                    @foreach ($jabatan as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_jabatan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary" type="submit">Simpan</button>
                <a href="/pemerintah" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </form>
@endsection

@extends('layout.admin')
@section('content')
    <div class="row">
        @foreach ($bidang as $item)
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        The Soul Of Madura
                    </div>
                    <div class="card-body">
                        <p class="card-text text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                            {{ $item->nama_bidang }}</p>
                        <a href="/bidang/{{ $item->id }}/edit-bidang" class="btn btn-primary">EDIT</a>
                        <a href="/bidang/{{ $item->id }}/hapus_bidang" class="btn btn-primary">DELETE</a>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="card-footer">
            <a href="/tambah-bidang" class="btn btn-outline-primary btn-sm mb-0 ps-3 mx-3"> Tambah
                Bidang</a>
        </div>
    </div>
@endsection

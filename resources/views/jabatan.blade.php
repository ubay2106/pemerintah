@extends('layout.admin')
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div
                            class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                            <h6 class="text-white text-capitalize ps-3">Data Jabatan</h6>
                            <a href="/tambah-jabatan" class="btn btn-outline-primary btn-sm mb-0 ps-3 mx-3"> Tambah
                                Jabatan</a>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            No</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jabatan
                                        </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Aksi</th>
                                </thead>
                                <tbody>
                                    @foreach ($jabatan as $item)
                                    <tr>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $loop->iteration }}</p>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $item->nama_jabatan }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <a href="/jabatan/{{ $item->id }}/edit-jabatan" class="btn btn-outline-primary btn-sm mb-0">Edit</a>
                                            <a href="/jabatan/{{ $item->id }}/hapus_jabatan" class="btn btn-outline-primary btn-sm mb-0">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layout.admin')
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="ms-3">
                <h3 class="mb-0 h4 font-weight-bolder">Dashboard</h3>
                <p class="mb-4">
                    Selamat datang
                </p>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-2 ps-3">
                        <div class="d-flex justify-content-between">
                            <img class="brand-image" src="assets/Sumenep.png" alt="Logo" height="50" width="50">
                            <div>
                                <p class="text-sm mb-0 text-capitalize">Total Pemerintah L/P</p>
                                <h4 class="mb-0">{{ $l }}/{{ $p }}</h4>
                            </div>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-2 ps-3">
                        <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">The Soul Of Madura</span></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-2 ps-3">
                        <div class="d-flex justify-content-between">
                            <img class="brand-image" src="assets/Sumenep.png" alt="Logo" height="50" width="50">
                            <div>
                                <p class="text-sm mb-0 text-capitalize">Total Pemerintah</p>
                                <h4 class="mb-0">{{ $pemerintah->count() }}</h4>
                            </div>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-2 ps-3">
                        <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">The Soul Of Madura</span></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-2 ps-3">
                        <div class="d-flex justify-content-between">
                            <img class="brand-image" src="assets/Sumenep.png" alt="Logo" height="50" width="50">
                            <div>
                                <p class="text-sm mb-0 text-capitalize">Total Jabatan</p>
                                <h4 class="mb-0">{{ $jabatan->count() }}</h4>
                            </div>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-2 ps-3">
                        <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">The Soul Of Madura</span></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-header p-2 ps-3">
                        <div class="d-flex justify-content-between">
                            <img class="brand-image" src="assets/Sumenep.png" alt="Logo" height="50" width="50">
                            <div>
                                <p class="text-sm mb-0 text-capitalize">Total Bidang</p>
                                <h4 class="mb-0">{{ $bidang->count() }}</h4>
                            </div>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="card-footer p-2 ps-3">
                        <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">The Soul Of Madura</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 mt-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        
                        <h6 class="mb-0 ">SUMENEP KOTA KERIS</h6>
                        <p class="text-sm ">visit now</p>
                        <div class="pe-2">
                            <div class="chart">
                                <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                            </div>
                        </div>
                        <hr class="dark horizontal">
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="mb-0 text-sm text-success font-weight-bolder"> The Soul Of Madura </p>
                            <img class="brand-image" src="assets/Sumenep.png" alt="Logo" height="70" width="70">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mt-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h6 class="mb-0 ">SUMENEP KOTA KERIS</h6>
                        <p class="text-sm ">visit now</p>
                        <div class="pe-2">
                            <div class="chart">
                                <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                            </div>
                        </div>
                        <hr class="dark horizontal">
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="mb-0 text-sm text-success font-weight-bolder"> The Soul Of Madura </p>
                            <img class="brand-image" src="assets/Sumenep.png" alt="Logo" height="70" width="70">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

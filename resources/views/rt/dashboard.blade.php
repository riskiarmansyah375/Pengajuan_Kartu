@extends('layouts.rt')

@section('title','Dashboard RT')

@section('content')

<div class="container-fluid">

    {{-- Header --}}
    <div class="mb-4">

        <h2 class="fw-bold">

            🏘 Dashboard RT

        </h2>

        <p class="text-muted">

            Monitoring Data Warga dan Kartu Sampah

        </p>

    </div>

    {{-- Statistik --}}
    <div class="row g-4">

        <div class="col-md-4">

            <div class="card border-0 shadow-lg stat-card">

                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>

                            <h6 class="text-muted">

                                Total Warga

                            </h6>

                            <h1 class="fw-bold text-primary">

                                {{ $totalWarga }}

                            </h1>

                        </div>

                        <div class="icon-box bg-primary">

                            <i class="bi bi-people-fill"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card border-0 shadow-lg stat-card">

                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>

                            <h6 class="text-muted">

                                Total Pengajuan

                            </h6>

                            <h1 class="fw-bold text-warning">

                                {{ $totalPengajuan }}

                            </h1>

                        </div>

                        <div class="icon-box bg-warning">

                            <i class="bi bi-file-earmark-text-fill"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card border-0 shadow-lg stat-card">

                <div class="card-body">

                    <div class="d-flex justify-content-between">

                        <div>

                            <h6 class="text-muted">

                                Total Kartu

                            </h6>

                            <h1 class="fw-bold text-success">

                                {{ $totalKartu }}

                            </h1>

                        </div>

                        <div class="icon-box bg-success">

                            <i class="bi bi-credit-card-fill"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    {{-- Info RT --}}
    <div class="card border-0 shadow-lg mt-4">

        <div class="card-body">

            <h5 class="fw-bold mb-3">

                👤 Informasi Ketua RT

            </h5>

            <div class="row">

                <div class="col-md-6">

                    <strong>Nama</strong>

                    <p>{{ auth()->user()->name }}</p>

                </div>

                <div class="col-md-6">

                    <strong>Role</strong>

                    <p>Ketua RT</p>

                </div>

            </div>

        </div>

    </div>

</div>

<style>

.stat-card{

    border-radius:20px;

    transition:.3s;

}

.stat-card:hover{

    transform:translateY(-5px);

}

.icon-box{

    width:65px;

    height:65px;

    border-radius:15px;

    color:white;

    display:flex;

    align-items:center;

    justify-content:center;

    font-size:25px;

}

</style>

@endsection
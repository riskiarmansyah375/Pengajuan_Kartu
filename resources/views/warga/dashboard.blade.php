@extends('layouts.warga')

@section('title','Dashboard Warga')

@section('content')

<div class="container-fluid">

    {{-- HEADER --}}
    <div class="mb-4">

        <h2 class="fw-bold">

            👋 Selamat Datang,
            {{ auth()->user()->name }}

        </h2>

        <p class="text-muted">

            Pantau status pengajuan kartu sampah Anda dengan mudah.

        </p>

    </div>

    {{-- STATUS CARD --}}
    @if($pengajuan)

    <div class="card shadow-lg border-0 rounded-4 mb-4">

        <div class="card-body p-4">

            <div class="row align-items-center">

                <div class="col-md-2 text-center">

                    @if($pengajuan->status == 'approved')

                        <div
                        class="rounded-circle bg-success text-white d-inline-flex align-items-center justify-content-center"
                        style="width:90px;height:90px;font-size:35px;">

                            ✓

                        </div>

                    @elseif($pengajuan->status == 'pending')

                        <div
                        class="rounded-circle bg-warning text-white d-inline-flex align-items-center justify-content-center"
                        style="width:90px;height:90px;font-size:35px;">

                            ⏳

                        </div>

                    @else

                        <div
                        class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center"
                        style="width:90px;height:90px;font-size:35px;">

                            ✕

                        </div>

                    @endif

                </div>

                <div class="col-md-10">

                    <h4 class="fw-bold">

                        Status Pengajuan Terakhir

                    </h4>

                    <hr>

                    <p class="mb-2">

                        Nama :

                        <strong>

                            {{ $pengajuan->nama }}

                        </strong>

                    </p>

                    <p class="mb-2">

                        NIK :

                        <strong>

                            {{ $pengajuan->nik }}

                        </strong>

                    </p>

                    <p class="mb-2">

                        Status :

                        @if($pengajuan->status == 'approved')

                            <span class="badge bg-success px-3 py-2">

                                APPROVED

                            </span>

                        @elseif($pengajuan->status == 'pending')

                            <span class="badge bg-warning text-dark px-3 py-2">

                                PENDING

                            </span>

                        @else

                            <span class="badge bg-danger px-3 py-2">

                                REJECTED

                            </span>

                        @endif

                    </p>

                </div>

            </div>

        </div>

    </div>

    @else

    <div class="card border-0 shadow-lg rounded-4">

        <div class="card-body text-center py-5">

            <div style="font-size:70px">

                📄

            </div>

            <h4 class="fw-bold mt-3">

                Belum Ada Pengajuan

            </h4>

            <p class="text-muted">

                Silakan ajukan kartu sampah terlebih dahulu.

            </p>

            <a
                href="{{ route('warga.pengajuan.create') }}"
                class="btn btn-success px-4">

                + Ajukan Kartu

            </a>

        </div>

    </div>

    @endif

</div>

@endsection


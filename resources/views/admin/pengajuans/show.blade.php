@extends('layouts.admin')

@section('title','Detail Pengajuan Kartu Sampah')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold mb-1">
                📋 Detail Pengajuan
            </h2>

            <p class="text-muted mb-0">
                Informasi lengkap data pengajuan warga
            </p>

        </div>

        <a href="{{ route('admin.pengajuans.index') }}"
           class="btn btn-dark rounded-pill px-4">

            <i class="bi bi-arrow-left-circle"></i>
            Kembali

        </a>

    </div>

    <div class="card border-0 shadow-lg rounded-4">

        <div class="card-body p-4">

            <div class="row">

                {{-- FOTO KTP --}}
                <div class="col-md-4">

                    @if($pengajuan->foto_ktp)

                    <img
                        src="{{ asset('storage/'.$pengajuan->foto_ktp) }}"
                        class="img-fluid rounded-4 shadow-sm"
                        style="
                            width:100%;
                            max-height:350px;
                            object-fit:cover;
                        ">

                    @else

                    <div
                        class="bg-light rounded-4 d-flex align-items-center justify-content-center"
                        style="height:350px;">

                        <div class="text-center text-muted">

                            <i class="bi bi-image fs-1"></i>

                            <p class="mt-2 mb-0">

                                Tidak ada foto

                            </p>

                        </div>

                    </div>

                    @endif

                </div>

                {{-- DATA PENGAJUAN --}}
                <div class="col-md-8">

                    <div class="mb-4">

                        <h3 class="fw-bold">

                            {{ $pengajuan->nama }}

                        </h3>

                        @if($pengajuan->status == 'pending')

                            <span class="badge bg-warning fs-6">
                                Pending
                            </span>

                        @elseif($pengajuan->status == 'approved')

                            <span class="badge bg-success fs-6">
                                Approved
                            </span>

                        @else

                            <span class="badge bg-danger fs-6">
                                Rejected
                            </span>

                        @endif

                    </div>

                    <div class="row">

                        <div class="col-md-6 mb-4">

                            <small class="text-muted">

                                NIK

                            </small>

                            <div class="fs-5 fw-semibold">

                                {{ $pengajuan->nik }}

                            </div>

                        </div>

                        <div class="col-md-6 mb-4">

                            <small class="text-muted">

                                Status Pengajuan

                            </small>

                            <div class="fs-5 fw-semibold">

                                {{ ucfirst($pengajuan->status) }}

                            </div>

                        </div>

                    </div>

                    <div class="mb-4">

                        <small class="text-muted">

                            Alamat

                        </small>

                        <div class="fs-5">

                            {{ $pengajuan->alamat }}

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    {{-- APPROVE / REJECT --}}
    @if($pengajuan->status == 'pending')

    <div class="card border-0 shadow-lg rounded-4 mt-4">

        <div class="card-body">

            <h5 class="fw-bold mb-4">

                Verifikasi Pengajuan

            </h5>

            <div class="row">

                <div class="col-md-6">

                    <form
                        action="{{ route('admin.pengajuans.approve',$pengajuan->id) }}"
                        method="POST">

                        @csrf

                        <button
                            class="btn btn-success btn-lg w-100">

                            <i class="bi bi-check-circle-fill"></i>

                            Approve Pengajuan

                        </button>

                    </form>

                </div>

                <div class="col-md-6">

                    <form
                        action="{{ route('admin.pengajuans.reject',$pengajuan->id) }}"
                        method="POST">

                        @csrf

                        <textarea
                            name="catatan"
                            class="form-control mb-3"
                            rows="4"
                            placeholder="Masukkan alasan penolakan..."></textarea>

                        <button
                            class="btn btn-danger btn-lg w-100">

                            <i class="bi bi-x-circle-fill"></i>

                            Reject Pengajuan

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

    @endif

</div>

@endsection


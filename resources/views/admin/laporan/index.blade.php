@extends('layouts.admin')

@section('title','Laporan Pengajuan Kartu Sampah')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold mb-1">

                📊 Laporan Pengajuan Kartu Sampah

            </h2>

            <p class="text-muted mb-0">

                Rekap seluruh pengajuan kartu sampah

            </p>

        </div>

        <div class="card border-0 shadow-sm px-4 py-2">

            <small class="text-muted">

                Total Pengajuan

            </small>

            <h4 class="fw-bold text-primary mb-0">

                {{ $pengajuans->count() }}

            </h4>

        </div>

    </div>

    <div class="card border-0 shadow-lg rounded-4">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table align-middle">

                    <thead>

                        <tr>

                            <th>No</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th>Tanggal Pengajuan</th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($pengajuans as $pengajuan)

                        <tr>

                            <td>

                                {{ $loop->iteration }}

                            </td>

                            <td>

                                <div class="d-flex align-items-center">

                                    <div class="avatar-user me-3">

                                        {{ strtoupper(substr($pengajuan->nama,0,1)) }}

                                    </div>

                                    <strong>

                                        {{ $pengajuan->nama }}

                                    </strong>

                                </div>

                            </td>

                            <td>

                                {{ $pengajuan->nik }}

                            </td>

                            <td>

                                {{ $pengajuan->alamat }}

                            </td>

                            <td>

                                @if($pengajuan->status == 'approved')

                                    <span class="badge bg-success px-3 py-2">

                                        Approved

                                    </span>

                                @elseif($pengajuan->status == 'rejected')

                                    <span class="badge bg-danger px-3 py-2">

                                        Rejected

                                    </span>

                                @else

                                    <span class="badge bg-warning text-dark px-3 py-2">

                                        Pending

                                    </span>

                                @endif

                            </td>

                            <td>

                                {{ $pengajuan->tanggal_pengajuan }}

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td colspan="6" class="text-center py-5">

                                Tidak ada data laporan

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<style>

.table thead{

    background:#0f172a;
    color:white;

}

.table thead th{

    border:none;

}

.table tbody tr{

    transition:.3s;

}

.table tbody tr:hover{

    background:#f8fafc;

}

.avatar-user{

    width:45px;
    height:45px;

    border-radius:50%;

    background:
    linear-gradient(
        135deg,
        #3b82f6,
        #10b981
    );

    color:white;

    display:flex;

    align-items:center;

    justify-content:center;

    font-weight:bold;

}

.card{

    overflow:hidden;

}

</style>

@endsection
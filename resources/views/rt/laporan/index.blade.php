@extends('layouts.rt')

@section('title','Laporan Pengajuan')

@section('content')

<div class="container-fluid">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold mb-1">
                📊 Laporan Pengajuan
            </h2>

            <p class="text-muted mb-0">
                Monitoring status pengajuan kartu sampah warga
            </p>

        </div>

        <div class="card border-0 shadow-sm px-4 py-2">

            <small class="text-muted">

                Total Pengajuan

            </small>

            <h4 class="mb-0 fw-bold text-primary">

                {{ $pengajuans->count() }}

            </h4>

        </div>

    </div>

    {{-- Card Table --}}
    <div class="card border-0 shadow-lg rounded-4">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table align-middle">

                    <thead>

                        <tr>

                            <th width="80">
                                No
                            </th>

                            <th>
                                Nama Warga
                            </th>

                            <th width="180">
                                Status
                            </th>

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

                                    <div>

                                        <strong>

                                            {{ $pengajuan->nama }}

                                        </strong>

                                    </div>

                                </div>

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

                        </tr>

                        @empty

                        <tr>

                            <td
                                colspan="3"
                                class="text-center py-5">

                                <img
                                    src="https://cdn-icons-png.flaticon.com/512/4076/4076549.png"
                                    width="80">

                                <br><br>

                                Belum ada data laporan

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

    background:#f8fafc;

}

.table thead th{

    border:none;

    font-weight:700;

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

    background:linear-gradient(
        135deg,
        #2563eb,
        #3b82f6
    );

    display:flex;

    justify-content:center;

    align-items:center;

    color:white;

    font-weight:bold;

}

.card{

    overflow:hidden;

}

</style>

@endsection
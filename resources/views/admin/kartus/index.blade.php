@extends('layouts.admin')

@section('title','Data Kartu Sampah')

@section('content')

<div class="container-fluid">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold mb-1">

                ♻ Data Kartu Sampah

            </h2>

            <p class="text-muted mb-0">

                Daftar kartu sampah yang sudah diterbitkan

            </p>

        </div>

        <div
            class="card border-0 shadow-sm px-4 py-2">

            <small class="text-muted">

                Total Kartu

            </small>

            <h4 class="mb-0 fw-bold text-success">

                {{ $kartus->count() }}

            </h4>

        </div>

    </div>

    {{-- CARD --}}
    <div class="card border-0 shadow-lg rounded-4">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table align-middle">

                    <thead>

                        <tr>

                            <th>No Kartu</th>

                            <th>Pemilik</th>

                            <th>Status</th>

                            <th width="180">
                                Aksi
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($kartus as $kartu)

                        <tr>

                            <td>

                                <span
                                    class="fw-bold text-primary">

                                    {{ $kartu->nomor_kartu }}

                                </span>

                            </td>

                            <td>

                                <div
                                    class="d-flex align-items-center">

                                    <div
                                        class="avatar-user me-3">

                                        {{ strtoupper(substr($kartu->pengajuan->nama,0,1)) }}

                                    </div>

                                    <div>

                                        <strong>

                                            {{ $kartu->pengajuan->nama }}

                                        </strong>

                                    </div>

                                </div>

                            </td>

                            <td>

                                <span
                                    class="badge bg-success px-3 py-2">

                                    Aktif

                                </span>

                            </td>

                            <td>

                              <a
                                        href="{{ route('admin.kartus.pdf',$kartu->id) }}"
                                            class="btn btn-danger btn-sm">

                                        <i class="bi bi-file-earmark-pdf-fill"></i>

                                        Download PDF

                                    </a>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td
                                colspan="4"
                                class="text-center py-5">

                                <img
                                    src="https://cdn-icons-png.flaticon.com/512/4076/4076549.png"
                                    width="80">

                                <br><br>

                                Belum ada kartu sampah

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

    font-weight:700;

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
@extends('layouts.admin')

@section('title','Data Pengajuan Kartu Sampah')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold mb-1">
                📋 Data Pengajuan Kartu Sampah
            </h2>

            <p class="text-muted mb-0">
                Kelola seluruh pengajuan kartu sampah warga
            </p>

        </div>

        <div>

            <span class="badge bg-primary fs-6">

                Total :
                {{ $pengajuans->count() }}

            </span>

        </div>

    </div>

    <div class="card border-0 shadow-lg rounded-4">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table align-middle">

                    <thead class="table-light">

                        <tr>

                            <th width="80">
                                No
                            </th>

                            <th>
                                Pemohon
                            </th>

                            <th>
                                NIK
                            </th>

                            <th>
                                Status
                            </th>

                            <th width="180">
                                Aksi
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($pengajuans as $pengajuan)

                        <tr>

                            <td>

                                <span
                                    class="badge bg-secondary">

                                    {{ $loop->iteration }}

                                </span>

                            </td>

                            <td>

                                <div
                                    class="d-flex align-items-center">

                                    <div
                                        class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3"
                                        style="
                                            width:45px;
                                            height:45px;
                                            font-weight:bold;
                                        ">

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

                                {{ $pengajuan->nik }}

                            </td>

                            <td>

                                @if($pengajuan->status == 'pending')

                                    <span class="badge bg-warning">

                                        Pending

                                    </span>

                                @elseif($pengajuan->status == 'approved')

                                    <span class="badge bg-success">

                                        Approved

                                    </span>

                                @else

                                    <span class="badge bg-danger">

                                        Rejected

                                    </span>

                                @endif

                            </td>

                            <td>

                                <a
                                    href="{{ route('admin.pengajuans.show',$pengajuan->id) }}"
                                    class="btn btn-info btn-sm">

                                    <i class="bi bi-eye-fill"></i>

                                    Detail

                                </a>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td
                                colspan="5"
                                class="text-center py-5">

                                Tidak ada data pengajuan

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection


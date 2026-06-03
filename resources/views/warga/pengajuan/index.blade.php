@extends('layouts.warga')

@section('title','Status Pengajuan')

@section('content')

<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h3>Status Pengajuan Kartu Sampah</h3>

        <a href="{{ route('warga.pengajuan.create') }}"
           class="btn btn-success">

            + Ajukan Kartu

        </a>

    </div>

    @if(session('success'))

        <div class="alert alert-success">

            {{ session('success') }}

        </div>

    @endif

    <div class="card">

        <div class="card-body">

            <table class="table table-bordered table-striped">

                <thead class="table-dark">

                    <tr>

                        <th>No</th>

                        <th>Nama</th>

                        <th>NIK</th>

                        <th>Tanggal Pengajuan</th>

                        <th>Status</th>

                        <th>Catatan Admin</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($pengajuans as $pengajuan)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>
                            {{ $pengajuan->nama }}
                        </td>

                        <td>
                            {{ $pengajuan->nik }}
                        </td>

                        <td>
                            {{ $pengajuan->tanggal_pengajuan }}
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

                            @elseif($pengajuan->status == 'rejected')

                                <span class="badge bg-danger">
                                    Rejected
                                </span>

                            @endif

                        </td>

                        <td>

                            {{ $pengajuan->catatan ?? '-' }}

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="6" class="text-center">

                            Belum ada pengajuan

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection
@extends('layouts.admin')

@section('title','Dashboard Admin')

@section('content')

<div class="container-fluid">

    {{-- Welcome Card --}}
    <div class="row mb-4">

        <div class="col-12">

            <div
                class="p-5 rounded-4 shadow text-white"
                style="
                    background:
                    linear-gradient(
                        135deg,
                        #0d6efd,
                        #20c997
                    );
                ">

                <h2 class="fw-bold">

                    Selamat Datang,
                    {{ auth()->user()->name }}

                </h2>

                <p class="mb-0">

                    Sistem Pembuatan Kartu Sampah Berbasis Web

                </p>

            </div>

        </div>

    </div>

    {{-- Statistik --}}
    <div class="row">

        <div class="col-md-4 mb-4">

            <div class="card border-0 shadow-lg rounded-4">

                <div class="card-body">

                    <h6 class="text-muted">

                        Total User

                    </h6>

                    <h2 class="fw-bold text-primary">

                        {{ $totalUser }}

                    </h2>

                </div>

            </div>

        </div>

        <div class="col-md-4 mb-4">

            <div class="card border-0 shadow-lg rounded-4">

                <div class="card-body">

                    <h6 class="text-muted">

                        Total Pengajuan

                    </h6>

                    <h2 class="fw-bold text-success">

                        {{ $totalPengajuan }}

                    </h2>

                </div>

            </div>

        </div>

        <div class="col-md-4 mb-4">

            <div class="card border-0 shadow-lg rounded-4">

                <div class="card-body">

                    <h6 class="text-muted">

                        Total Kartu

                    </h6>

                    <h2 class="fw-bold text-info">

                        {{ $totalKartu }}

                    </h2>

                </div>

            </div>

        </div>

    </div>

    {{-- Status --}}
    <div class="row">

        <div class="col-md-4 mb-4">

            <div class="card border-0 shadow rounded-4">

                <div class="card-body text-center">

                    <h5 class="text-warning">

                        Pending

                    </h5>

                    <h1 class="display-5 fw-bold text-warning">

                        {{ $pending }}

                    </h1>

                </div>

            </div>

        </div>

        <div class="col-md-4 mb-4">

            <div class="card border-0 shadow rounded-4">

                <div class="card-body text-center">

                    <h5 class="text-success">

                        Approved

                    </h5>

                    <h1 class="display-5 fw-bold text-success">

                        {{ $approved }}

                    </h1>

                </div>

            </div>

        </div>

        <div class="col-md-4 mb-4">

            <div class="card border-0 shadow rounded-4">

                <div class="card-body text-center">

                    <h5 class="text-danger">

                        Rejected

                    </h5>

                    <h1 class="display-5 fw-bold text-danger">

                        {{ $rejected }}

                    </h1>

                </div>

            </div>

        </div>

    </div>

    {{-- User Terbaru --}}
    <div class="card border-0 shadow-lg rounded-4">

        <div class="card-header bg-white">

            <div
                class="d-flex justify-content-between align-items-center">

                <h5 class="mb-0">

                    👥 User Terbaru

                </h5>

                <a
                    href="{{ route('admin.users.index') }}"
                    class="btn btn-primary btn-sm">

                    Lihat Semua

                </a>

            </div>

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table align-middle">

                    <thead>

                        <tr>

                            <th>User</th>

                            <th>Email</th>

                            <th>Role</th>

                            <th>Status</th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach($users as $user)

                        <tr>

                            <td>

                                <div
                                    class="d-flex align-items-center">

                                    <div
                                        class="user-avatar me-3">

                                        {{ strtoupper(substr($user->name,0,1)) }}

                                    </div>

                                    <strong>

                                        {{ $user->name }}

                                    </strong>

                                </div>

                            </td>

                            <td>

                                {{ $user->email }}

                            </td>

                            <td>

                                <span
                                    class="badge bg-primary">

                                    {{ $user->role->name }}

                                </span>

                            </td>

                            <td>

                                <span
                                    class="badge bg-success">

                                    Aktif

                                </span>

                            </td>

                        </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection
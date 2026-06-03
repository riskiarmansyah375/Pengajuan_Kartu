@extends('layouts.admin')

@section('title','Data User')

@section('content')

<div class="container-fluid">

    {{-- HEADER --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold mb-1">

                👥 Data User

            </h2>

            <p class="text-muted mb-0">

                Kelola seluruh pengguna sistem

            </p>

        </div>

        <a
            href="{{ route('admin.users.create') }}"
            class="btn btn-primary rounded-3 shadow-sm">

            <i class="bi bi-plus-circle"></i>

            Tambah User

        </a>

    </div>

    {{-- ALERT SUCCESS --}}
    @if(session('success'))

    <div class="alert alert-success border-0 shadow-sm">

        {{ session('success') }}

    </div>

    @endif

    {{-- ALERT ERROR --}}
    @if(session('error'))

    <div class="alert alert-danger border-0 shadow-sm">

        {{ session('error') }}

    </div>

    @endif

    {{-- CARD TABLE --}}
    <div class="card shadow-lg border-0 rounded-4">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table align-middle">

                    <thead>

                        <tr>

                            <th>No</th>

                            <th>User</th>

                            <th>Email</th>

                            <th>Role</th>

                            <th width="180">

                                Aksi

                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($users as $user)

                        <tr>

                            <td>

                                {{ $loop->iteration }}

                            </td>

                            <td>

                                <div
                                    class="d-flex align-items-center">

                                    <div
                                        class="user-avatar me-3">

                                        {{ strtoupper(substr($user->name,0,1)) }}

                                    </div>

                                    <div>

                                        <strong>

                                            {{ $user->name }}

                                        </strong>

                                    </div>

                                </div>

                            </td>

                            <td>

                                {{ $user->email }}

                            </td>

                            <td>

                                @if(
                                    $user->role?->name == 'Admin'
                                )

                                    <span
                                        class="badge bg-danger">

                                        Admin

                                    </span>

                                @elseif(
                                    $user->role?->name == 'RT'
                                )

                                    <span
                                        class="badge bg-warning text-dark">

                                        RT

                                    </span>

                                @else

                                    <span
                                        class="badge bg-success">

                                        Warga

                                    </span>

                                @endif

                            </td>

                            <td>

                                <a
                                    href="{{ route('admin.users.edit',$user->id) }}"
                                    class="btn btn-warning btn-sm">

                                    <i class="bi bi-pencil-square"></i>

                                </a>

                                <form
                                    action="{{ route('admin.users.destroy',$user->id) }}"
                                    method="POST"
                                    class="d-inline">

                                    @csrf

                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus user ini?')">

                                        <i class="bi bi-trash"></i>

                                    </button>

                                </form>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td
                                colspan="5"
                                class="text-center py-4">

                                Tidak ada data user

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


@extends('layouts.admin')

@section('title','Data Role')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold mb-1">

                🛡️ Data Role

            </h2>

            <p class="text-muted mb-0">

                Kelola role dan hak akses pengguna

            </p>

        </div>

        <a
            href="{{ route('admin.roles.create') }}"
            class="btn btn-primary shadow-sm">

            <i class="bi bi-plus-circle"></i>

            Tambah Role

        </a>

    </div>

    @if(session('success'))

    <div class="alert alert-success border-0 shadow-sm">

        {{ session('success') }}

    </div>

    @endif

    @if(session('error'))

    <div class="alert alert-danger border-0 shadow-sm">

        {{ session('error') }}

    </div>

    @endif

    <div class="card shadow-lg border-0 rounded-4">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table align-middle">

                    <thead>

                        <tr>

                            <th width="80">
                                No
                            </th>

                            <th>
                                Nama Role
                            </th>

                            <th width="250">
                                Aksi
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($roles as $role)

                        <tr>

                            <td>

                                {{ $loop->iteration }}

                            </td>

                            <td>

                                <div
                                    class="d-flex align-items-center">

                                    <div
                                        class="user-avatar me-3">

                                        {{ strtoupper(substr($role->name,0,1)) }}

                                    </div>

                                    <div>

                                        <strong>

                                            {{ $role->name }}

                                        </strong>

                                    </div>

                                </div>

                            </td>

                            <td>

                                <a
                                    href="{{ route('admin.roles.edit',$role->id) }}"
                                    class="btn btn-warning btn-sm">

                                    <i class="bi bi-pencil-square"></i>

                                </a>

                                <a
                                    href="{{ route('admin.roles.permissions',$role->id) }}"
                                    class="btn btn-info btn-sm">

                                    <i class="bi bi-shield-check"></i>

                                </a>

                                <form
                                    action="{{ route('admin.roles.destroy',$role->id) }}"
                                    method="POST"
                                    class="d-inline">

                                    @csrf

                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus role ini?')">

                                        <i class="bi bi-trash"></i>

                                    </button>

                                </form>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td
                                colspan="3"
                                class="text-center py-4">

                                Tidak ada data role

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


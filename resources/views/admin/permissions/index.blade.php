@extends('layouts.admin')

@section('title','Data Permission')

@section('content')

<div class="container-fluid">

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>

        <h2 class="fw-bold mb-1">
            🔐 Data Permission
        </h2>

        <p class="text-muted mb-0">
            Kelola seluruh hak akses sistem
        </p>

    </div>

    <a href="{{ route('admin.permissions.create') }}"
       class="btn btn-primary shadow rounded-3">

        <i class="bi bi-plus-circle"></i>
        Tambah Permission

    </a>

</div>

@if(session('success'))

    <div class="alert alert-success border-0 shadow-sm rounded-3">

        {{ session('success') }}

    </div>

@endif

<div class="card border-0 shadow-lg rounded-4 overflow-hidden">

    <div class="card-body p-4">

        <div class="table-responsive">

            <table class="table align-middle">

                <thead>

                    <tr>

                        <th width="80">#</th>

                        <th>Permission</th>

                        <th width="220">Aksi</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($permissions as $permission)

                    <tr>

                        <td>

                            <span
                                class="badge bg-secondary px-3 py-2">

                                {{ $loop->iteration }}

                            </span>

                        </td>

                        <td>

                            <div
                                class="d-flex align-items-center">

                                <div
                                    class="permission-icon me-3">

                                    <i class="bi bi-shield-lock-fill"></i>

                                </div>

                                <strong>

                                    {{ $permission->name }}

                                </strong>

                            </div>

                        </td>

                        <td>

                            <a
                                href="{{ route('admin.permissions.edit',$permission->id) }}"
                                class="btn btn-warning btn-sm">

                                <i class="bi bi-pencil-square"></i>

                                Edit

                            </a>

                            <form
                                action="{{ route('admin.permissions.destroy',$permission->id) }}"
                                method="POST"
                                class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus permission ini?')">

                                    <i class="bi bi-trash"></i>

                                    Hapus

                                </button>

                            </form>

                        </td>

                    </tr>

                    @endforeach

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

    color:#0f172a;

}

.table tbody tr{

    transition:.3s;

}

.table tbody tr:hover{

    background:#f8fafc;

}

.permission-icon{

    width:44px;

    height:44px;

    border-radius:50%;

    background:
    linear-gradient(
        135deg,
        #2563eb,
        #3b82f6
    );

    color:white;

    display:flex;

    justify-content:center;

    align-items:center;

    font-size:18px;

}

.card{

    background:white;

}

.btn-warning{

    color:black;

    font-weight:600;

}

.btn-danger{

    font-weight:600;

}

</style>

@endsection

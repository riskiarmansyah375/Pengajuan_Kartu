@extends('layouts.admin')

@section('title','Create User')

@section('content')

<div class="container mt-4">

    <h3>Tambah User</h3>

    <a href="{{ route('admin.users.index') }}"
       class="btn btn-secondary mb-3">
        Kembali
    </a>

    <div class="card">

        <div class="card-body">

            <form action="{{ route('admin.users.store') }}"
                  method="POST">

                @csrf

                <div class="mb-3">
                    <label>Nama</label>

                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        required>
                </div>

                <div class="mb-3">
                    <label>Email</label>

                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        required>
                </div>

                <div class="mb-3">
                    <label>Password</label>

                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        required>
                </div>

                <div class="mb-3">
                    <label>Role</label>

                    <select
                        name="role_id"
                        class="form-control"
                        required>

                        <option value="">
                            -- Pilih Role --
                        </option>

                        @foreach($roles as $role)

                            <option value="{{ $role->id }}">
                                {{ $role->name }}
                            </option>

                        @endforeach

                    </select>
                </div>

                <button
                    type="submit"
                    class="btn btn-success">

                    Simpan

                </button>

            </form>

        </div>

    </div>

</div>

</body>
</html>

@endsection
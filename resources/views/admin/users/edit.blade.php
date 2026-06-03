@extends('layouts.admin')

@section('title','Edit User')

@section('content')

<div class="container mt-4">

    <h3>Edit User</h3>

    <a href="{{ route('admin.users.index') }}"
       class="btn btn-secondary mb-3">
        Kembali
    </a>

    <div class="card">

        <div class="card-body">

            <form action="{{ route('admin.users.update', $user->id) }}"
                  method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Nama</label>

                    <input
                        type="text"
                        name="name"
                        class="form-control"
                        value="{{ old('name', $user->name) }}"
                        required>
                </div>

                <div class="mb-3">
                    <label>Email</label>

                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        value="{{ old('email', $user->email) }}"
                        required>
                </div>

                <div class="mb-3">
                    <label>Role</label>

                    <select
                        name="role_id"
                        class="form-control"
                        required>

                        @foreach($roles as $role)

                            <option
                                value="{{ $role->id }}"
                                {{ $user->role_id == $role->id ? 'selected' : '' }}>

                                {{ $role->name }}

                            </option>

                        @endforeach

                    </select>

                </div>

                <button
                    type="submit"
                    class="btn btn-success">

                    Update

                </button>

            </form>

        </div>

    </div>

</div>

</body>
</html>

@endsection
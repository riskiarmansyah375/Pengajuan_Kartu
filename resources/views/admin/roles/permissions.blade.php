@extends('layouts.admin')

@section('title','Role Permissions')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h3>
            Role :
            {{ $role->name }}
        </h3>

        <a
            href="{{ route('admin.roles.index') }}"
            class="btn btn-secondary">

            <i class="bi bi-arrow-left"></i>

            Kembali

        </a>

    </div>

    @if(session('success'))

    <div class="alert alert-success">

        {{ session('success') }}

    </div>

    @endif

    @if(session('error'))

    <div class="alert alert-danger">

        {{ session('error') }}

    </div>

    @endif

    <form
        action="{{ route('admin.roles.permissions.store',$role->id) }}"
        method="POST">

        @csrf

        @foreach($permissions as $permission)

            <div class="form-check">

                <input
                    type="checkbox"
                    name="permissions[]"
                    value="{{ $permission->id }}"
                    class="form-check-input"

                    {{ $role->permissions->contains($permission->id)
                        ? 'checked'
                        : '' }}>

                <label class="form-check-label">

                    {{ $permission->name }}

                </label>

            </div>

        @endforeach

        <button
            type="submit"
            class="btn btn-success mt-3">

            Simpan

        </button>

    </form>

</div>

@endsection


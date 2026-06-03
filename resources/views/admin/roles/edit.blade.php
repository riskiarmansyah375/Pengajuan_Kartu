@extends('layouts.admin')

@section('title','Edit Role')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h3>Edit Role</h3>

        <a
            href="{{ route('admin.roles.index') }}"
            class="btn btn-secondary">

            Kembali

        </a>

    </div>

    <form
        action="{{ route('admin.roles.update',$role->id) }}"
        method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label>Nama Role</label>

            <input
                type="text"
                name="name"
                class="form-control"
                value="{{ old('name',$role->name) }}">

        </div>

        <button
            type="submit"
            class="btn btn-success">

            Update

        </button>

    </form>

</div>

@endsection


@extends('layouts.admin')

@section('title','Edit Permission')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h3>Edit Permission</h3>

        <a
            href="{{ route('admin.permissions.index') }}"
            class="btn btn-secondary">

            <i class="bi bi-arrow-left"></i>

            Kembali

        </a>

    </div>

    @if($errors->any())

        <div class="alert alert-danger">

            <ul class="mb-0">

                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

    <form
        action="{{ route('admin.permissions.update',$permission->id) }}"
        method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <input
                type="text"
                name="name"
                class="form-control"
                value="{{ old('name',$permission->name) }}">

        </div>

        <button
            type="submit"
            class="btn btn-success">

            Update

        </button>

    </form>

</div>

@endsection


@extends('layouts.admin')

@section('title','Create Permission')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h3>Create Permission</h3>


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
        action="{{ route('admin.permissions.store') }}"
        method="POST">

        @csrf

        <div class="mb-3">

            <input
                type="text"
                name="name"
                class="form-control"
                placeholder="Permission"
                value="{{ old('name') }}">

        </div>

        <button
            type="submit"
            class="btn btn-success">

            Simpan

        </button>

    </form>

</div>

@endsection
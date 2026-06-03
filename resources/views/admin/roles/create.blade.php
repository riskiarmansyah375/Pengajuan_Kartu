@extends('layouts.admin')

@section('title','Create Role')

@section('content')

<form action="{{ route('admin.roles.store') }}" method="POST">
    @csrf

    <input
        type="text"
        name="name"
        class="form-control mb-3"
        placeholder="Nama Role">

    <button class="btn btn-success">
        Simpan
    </button>
</form>

@endsection

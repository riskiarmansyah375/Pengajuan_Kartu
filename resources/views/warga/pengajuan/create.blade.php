@extends('layouts.warga')

@section('title','Ajukan Kartu')

@section('content')

<h2>Pengajuan Kartu Sampah</h2>

<form
    action="{{ route('warga.pengajuan.store') }}"
    method="POST"
    enctype="multipart/form-data">

    @csrf

    <div class="mb-3">

        <label>Nama</label>

        <input
            type="text"
            name="nama"
            class="form-control">

    </div>

    <div class="mb-3">

        <label>NIK</label>

        <input
            type="text"
            name="nik"
            class="form-control">

    </div>

    <div class="mb-3">

        <label>Alamat</label>

        <textarea
            name="alamat"
            class="form-control"></textarea>

    </div>

    <div class="mb-3">

        <label>Foto KTP</label>

        <input
            type="file"
            name="foto_ktp"
            class="form-control">

    </div>

    <button
        class="btn btn-success">

        Kirim Pengajuan

    </button>

</form>

@endsection
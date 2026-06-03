@extends('layouts.admin')

@section('title','Dashboard')

@section('content')

<h2>Kartu Sampah</h2>

<p>
Nomor :
{{ $kartu->nomor_kartu }}
</p>

<p>
Nama :
{{ $kartu->pengajuan->nama }}
</p>

<p>
NIK :
{{ $kartu->pengajuan->nik }}
</p>

<img
src="{{ asset('storage/'.$kartu->qr_code) }}"
width="200">

@endsection
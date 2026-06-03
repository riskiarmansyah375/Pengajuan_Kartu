@extends('layouts.admin')

@section('title','Status Pengajuan')

@section('content')

<h2>Status Pengajuan</h2>

<table class="table table-bordered">

    <tr>

        <th>Nama</th>

        <th>NIK</th>

        <th>Status</th>

    </tr>

    @foreach($pengajuans as $pengajuan)

    <tr>

        <td>{{ $pengajuan->nama }}</td>

        <td>{{ $pengajuan->nik }}</td>

        <td>

            @if($pengajuan->status == 'pending')

                <span class="badge bg-warning">

                    Pending

                </span>

            @elseif($pengajuan->status == 'approved')

                <span class="badge bg-success">

                    Approved

                </span>

            @else

                <span class="badge bg-danger">

                    Rejected

                </span>

            @endif

        </td>

    </tr>

    @endforeach

</table>

@endsection
<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function create()
    {
        return view('warga.pengajuan.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'nama' => 'required',

            'nik' => 'required|unique:pengajuans',

            'alamat' => 'required',

            'foto_ktp' => 'required|image'

        ]);

        $foto = $request
            ->file('foto_ktp')
            ->store(
                'ktp',
                'public'
            );

        Pengajuan::create([

            'user_id' => auth()->id(),

            'nama' => $request->nama,

            'nik' => $request->nik,

            'alamat' => $request->alamat,

            'foto_ktp' => $foto,

            'status' => 'pending',

            'tanggal_pengajuan' => now()

        ]);

        return redirect()
            ->route('warga.pengajuan.index')
            ->with(
                'success',
                'Pengajuan berhasil dibuat'
            );
    }

    public function index()
    {
        $pengajuans = Pengajuan::where(
            'user_id',
            auth()->id()
        )->latest()->get();

        return view(
            'warga.pengajuan.index',
            compact('pengajuans')
        );
    }
}
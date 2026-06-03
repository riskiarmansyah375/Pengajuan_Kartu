<?php

namespace App\Http\Controllers\RT;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan;

class LaporanController extends Controller
{
    public function index()
    {
        $pengajuans = Pengajuan::with('user')
            ->latest()
            ->get();

        return view(
            'rt.laporan.index',
            compact('pengajuans')
        );
    }
}
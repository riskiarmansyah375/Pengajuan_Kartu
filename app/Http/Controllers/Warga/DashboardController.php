<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan;

class DashboardController extends Controller
{
    public function index()
    {
        $pengajuan = Pengajuan::where(
            'user_id',
            auth()->id()
        )->latest()->first();

        $totalPengajuan = Pengajuan::where(
            'user_id',
            auth()->id()
        )->count();

        $approved = Pengajuan::where(
            'user_id',
            auth()->id()
        )
        ->where('status', 'approved')
        ->count();

        $pending = Pengajuan::where(
            'user_id',
            auth()->id()
        )
        ->where('status', 'pending')
        ->count();

        return view(
            'warga.dashboard',
            compact(
                'pengajuan',
                'totalPengajuan',
                'approved',
                'pending'
            )
        );
    }
}
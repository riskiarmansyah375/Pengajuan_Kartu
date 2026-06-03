<?php

namespace App\Http\Controllers\RT;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Pengajuan;
use App\Models\KartuSampah;

class DashboardController extends Controller
{
    public function index()
    {
        $totalWarga = User::where('role_id', 3)->count();

        $totalPengajuan = Pengajuan::count();

        $totalKartu = KartuSampah::count();

        return view(
            'rt.dashboard',
            compact(
                'totalWarga',
                'totalPengajuan',
                'totalKartu'
            )
        );
    }
}
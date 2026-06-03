<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Pengajuan;
use App\Models\KartuSampah;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUser = User::count();

        $totalPengajuan = Pengajuan::count();

        $pending = Pengajuan::where(
            'status',
            'pending'
        )->count();

        $approved = Pengajuan::where(
            'status',
            'approved'
        )->count();

        $rejected = Pengajuan::where(
            'status',
            'rejected'
        )->count();

        $totalKartu = KartuSampah::count();

        $users = User::with('role')
            ->latest()
            ->take(5)
            ->get();

        return view(
            'admin.dashboard',
            compact(
                'totalUser',
                'totalPengajuan',
                'pending',
                'approved',
                'rejected',
                'totalKartu',
                'users'
            )
        );
    }
}
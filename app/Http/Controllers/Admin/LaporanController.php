<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengajuan;

class LaporanController extends Controller
{
    public function index()
{
    $pengajuans = Pengajuan::latest()->get();

    return view(
        'admin.laporan.index',
        compact('pengajuans')
    );
}
}

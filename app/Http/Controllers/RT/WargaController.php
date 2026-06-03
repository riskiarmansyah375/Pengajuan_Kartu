<?php

namespace App\Http\Controllers\RT;

use App\Http\Controllers\Controller;
use App\Models\User;

class WargaController extends Controller
{
    public function index()
    {
        $wargas = User::with('role')
            ->where('role_id', 3)
            ->latest()
            ->get();

        return view(
            'rt.warga.index',
            compact('wargas')
        );
    }
}
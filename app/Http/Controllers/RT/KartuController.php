<?php

namespace App\Http\Controllers\RT;

use App\Http\Controllers\Controller;
use App\Models\KartuSampah;

class KartuController extends Controller
{
    public function index()
    {
        $kartus = KartuSampah::with(
            'pengajuan'
        )->latest()->get();

        return view(
            'rt.kartu.index',
            compact('kartus')
        );
    }
}
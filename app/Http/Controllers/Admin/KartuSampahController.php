<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KartuSampah;
use Barryvdh\DomPDF\Facade\Pdf;

class KartuSampahController extends Controller
{
    public function index()
    {
        $kartus = KartuSampah::with('pengajuan')
            ->latest()
            ->get();

        return view(
            'admin.kartus.index',
            compact('kartus')
        );
    }

    public function show(KartuSampah $kartu)
    {
        return view(
            'admin.kartus.show',
            compact('kartu')
        );
    }


    public function pdf(KartuSampah $kartu)
    {
        $pdf = Pdf::loadView(
            'admin.kartus.pdf',
            compact('kartu')
        );

        return $pdf->download(
            $kartu->nomor_kartu . '.pdf'
        );
    }
}
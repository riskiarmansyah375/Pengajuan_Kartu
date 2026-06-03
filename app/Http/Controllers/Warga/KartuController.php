<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use App\Models\KartuSampah;
use Barryvdh\DomPDF\Facade\Pdf;

class KartuController extends Controller
{
    public function index()
    {
        $kartu = KartuSampah::whereHas(
            'pengajuan',
            function ($query) {

                $query->where(
                    'user_id',
                    auth()->id()
                );

            }
        )->first();

        return view(
            'warga.kartu.index',
            compact('kartu')
        );
    }

    // TAMBAHKAN METHOD INI
    public function download(KartuSampah $kartu)
    {
        if (
            $kartu->pengajuan->user_id
            != auth()->id()
        ) {
            abort(403);
        }

        $pdf = Pdf::loadView(
            'admin.kartus.pdf',
            compact('kartu')
        );

        return $pdf->download(
            $kartu->nomor_kartu.'.pdf'
        );
    }
}
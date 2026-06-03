<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan;
use App\Models\KartuSampah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PengajuanController extends Controller
{
    public function index()
    {
        $pengajuans = Pengajuan::with('user')
            ->latest()
            ->get();

        return view(
            'admin.pengajuans.index',
            compact('pengajuans')
        );
    }

    public function show(Pengajuan $pengajuan)
    {
        return view(
            'admin.pengajuans.show',
            compact('pengajuan')
        );
    }

    public function approve(Pengajuan $pengajuan)
    {
        // Cegah approve ganda
        if ($pengajuan->status == 'approved') {

            return redirect()
                ->route('admin.pengajuans.index')
                ->with(
                    'error',
                    'Pengajuan sudah pernah disetujui'
                );
        }

        // Update status pengajuan
        $pengajuan->update([
            'status' => 'approved'
        ]);

        // Generate nomor kartu
        $nomorKartu =
            'KS-' .
            date('Y') .
            '-' .
            str_pad(
                $pengajuan->id,
                5,
                '0',
                STR_PAD_LEFT
            );

        // Default QR kosong
        $fileName = null;

        try {

            $fileName =
                'qrcode/' .
                $nomorKartu .
                '.svg';

            $qrCode = QrCode::format('svg')
                ->size(300)
                ->generate(

                    "Nomor Kartu : {$nomorKartu}\n" .
                    "Nama : {$pengajuan->nama}\n" .
                    "NIK : {$pengajuan->nik}"

                );

            Storage::disk('public')->put(
                $fileName,
                $qrCode
            );

        } catch (\Exception $e) {

            // Jika QR gagal dibuat,
            // kartu tetap dibuat

            $fileName = null;
        }

        // Simpan kartu
        KartuSampah::create([

            'pengajuan_id' => $pengajuan->id,

            'nomor_kartu' => $nomorKartu,

            'qr_code' => $fileName

        ]);

        return redirect()
            ->route('admin.pengajuans.index')
            ->with(
                'success',
                'Pengajuan berhasil disetujui dan kartu berhasil dibuat'
            );
    }

    public function reject(
        Request $request,
        Pengajuan $pengajuan
    )
    {
        $request->validate([
            'catatan' => 'required'
        ]);

        $pengajuan->update([
            'status' => 'rejected',
            'catatan' => $request->catatan
        ]);

        return redirect()
            ->route('admin.pengajuans.index')
            ->with(
                'success',
                'Pengajuan berhasil ditolak'
            );
    }
}
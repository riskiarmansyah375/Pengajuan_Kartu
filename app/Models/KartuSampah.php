<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KartuSampah extends Model
{
    protected $fillable = [
        'pengajuan_id',
        'nomor_kartu',
        'qr_code'
    ];

    public function pengajuan()
    {
        return $this->belongsTo(Pengajuan::class);
    }
}
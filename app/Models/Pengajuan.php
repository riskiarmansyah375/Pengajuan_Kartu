<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use App\Models\KartuSampah;

#[Fillable([
    'user_id',
    'nama',
    'nik',
    'alamat',
    'foto_ktp',
    'status',
    'catatan',
    'tanggal_pengajuan'
])]
class Pengajuan extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kartuSampah()
{
    return $this->hasOne(KartuSampah::class);
}
}
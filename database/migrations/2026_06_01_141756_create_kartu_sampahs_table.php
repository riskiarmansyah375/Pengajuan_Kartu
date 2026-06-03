<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kartu_sampahs', function (Blueprint $table) {

            $table->id();

            $table->foreignId('pengajuan_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('nomor_kartu')
                ->unique();

            $table->string('qr_code')
                ->nullable();

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kartu_sampahs');
    }
};
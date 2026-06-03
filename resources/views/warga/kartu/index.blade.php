@extends('layouts.warga')

@section('title','Kartu Sampah Saya')

@section('content')

<div class="container-fluid">

    <div class="mb-4">

        <h2 class="fw-bold">
            ♻ Kartu Sampah Digital
        </h2>

        <p class="text-muted">
            Identitas resmi warga pengguna sistem kartu sampah
        </p>

    </div>

    @if($kartu)

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="smart-card">

                <div class="card-top">

                    <div>

                        <h4 class="mb-0 fw-bold">

                            Sistem Kartu Sampah

                        </h4>

                        <small>

                            Smart Waste Card

                        </small>

                    </div>

                    <span class="badge bg-success px-3 py-2">

                        AKTIF

                    </span>

                </div>

                <div class="card-number">

                    {{ $kartu->nomor_kartu }}

                </div>

                <div class="row mt-4 align-items-center">

                    <div class="col-md-7">

                        <div class="info-box">

                            <div class="info-title">
                                NAMA PEMILIK
                            </div>

                            <div class="info-value">
                                {{ $kartu->pengajuan->nama }}
                            </div>

                        </div>

                        <div class="info-box">

                            <div class="info-title">
                                NIK
                            </div>

                            <div class="info-value">
                                {{ $kartu->pengajuan->nik }}
                            </div>

                        </div>

                        <div class="info-box">

                            <div class="info-title">
                                ALAMAT
                            </div>

                            <div class="info-value">
                                {{ $kartu->pengajuan->alamat }}
                            </div>

                        </div>

                    </div>

                    <div class="col-md-5 text-center">

                        {!! QrCode::size(140)->generate($kartu->nomor_kartu) !!}

                    </div>

                </div>

            </div>

            <div class="text-center mt-4">

                <a href="{{ route('warga.kartu.pdf',$kartu->id) }}"
                    class="btn btn-light download-btn">

                    <i class="bi bi-download me-2"></i>

                    Download PDF

                </a>

            </div>

        </div>

    </div>

    @else

    <div class="alert alert-warning">

        Anda belum memiliki kartu sampah.

    </div>

    @endif

</div>

<style>

.smart-card{

    background:
    linear-gradient(
        135deg,
        #198754,
        #20c997,
        #0dcaf0
    );

    border-radius:30px;

    padding:40px;

    color:white;

    position:relative;

    overflow:hidden;

    box-shadow:
    0 20px 50px rgba(0,0,0,.20);

    backdrop-filter:blur(10px);

}

.smart-card::before{

    content:'';

    position:absolute;

    width:350px;

    height:350px;

    border-radius:50%;

    background:
    rgba(255,255,255,.08);

    top:-150px;

    right:-100px;

}

.smart-card::after{

    content:'';

    position:absolute;

    width:250px;

    height:250px;

    border-radius:50%;

    background:
    rgba(255,255,255,.05);

    bottom:-120px;

    left:-80px;

}

.card-top{

    display:flex;

    justify-content:space-between;

    align-items:center;

    position:relative;

    z-index:2;

}

.card-number{

    font-size:34px;

    font-weight:700;

    letter-spacing:3px;

    margin-top:35px;

    position:relative;

    z-index:2;

}

.info-box{

    background:
    rgba(255,255,255,.12);

    border:1px solid rgba(255,255,255,.15);

    border-radius:15px;

    padding:15px;

    margin-bottom:12px;

}

.info-title{

    font-size:12px;

    opacity:.8;

    margin-bottom:3px;

}

.info-value{

    font-size:16px;

    font-weight:600;

}

.smart-card svg{

    background:white;

    padding:12px;

    border-radius:20px;

    box-shadow:
    0 10px 25px rgba(0,0,0,.15);

}

.download-btn{

    border:none;

    border-radius:50px;

    padding:12px 30px;

    font-weight:600;

    color:#198754;

    box-shadow:
    0 8px 20px rgba(25,135,84,.25);

    transition:.3s;

}

.download-btn:hover{

    transform:translateY(-3px);

}

@media(max-width:768px){

    .smart-card{

        padding:25px;

    }

    .card-number{

        font-size:22px;

        letter-spacing:1px;

    }

    .info-value{

        font-size:14px;

    }

    .card-top{

        flex-direction:column;

        gap:10px;

        align-items:flex-start;

    }

}

</style>

@endsection


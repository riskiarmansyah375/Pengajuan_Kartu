<!DOCTYPE html>
<html>

<head>

    <title>Kartu Sampah</title>

    <style>

        body{

            font-family:Arial, sans-serif;

            padding:30px;

            background:#f4f6f9;

        }

        .card-sampah{

            width:100%;

            border-radius:20px;

            overflow:hidden;

            border:3px solid #16a34a;

            background:white;

            box-shadow:0 10px 25px rgba(0,0,0,.15);

        }

        .card-header{

            background:
            linear-gradient(
                135deg,
                #16a34a,
                #22c55e
            );

            color:white;

            padding:20px;

            text-align:center;

        }

        .card-header h1{

            margin:0;

            font-size:26px;

        }

        .card-header p{

            margin-top:5px;

            font-size:14px;

        }

        .card-body{

            padding:25px;

        }

        .info{

            margin-bottom:12px;

            font-size:16px;

        }

        .label{

            font-weight:bold;

            width:120px;

            display:inline-block;

        }

        .status{

            display:inline-block;

            padding:6px 15px;

            border-radius:20px;

            background:#22c55e;

            color:white;

            font-weight:bold;

        }

        .qr-section{

            text-align:center;

            margin-top:25px;

        }

        .qr-section img{

            border:5px solid #e5e7eb;

            padding:10px;

            border-radius:12px;

            background:white;

        }

        .footer{

            text-align:center;

            background:#111827;

            color:white;

            padding:12px;

            font-size:12px;

        }

    </style>

</head>

<body>

<div class="card-sampah">

    <div class="card-header">

        <h1>
            ♻ KARTU SAMPAH DIGITAL
        </h1>

        <p>
            Smart Waste Management System
        </p>

    </div>

    <div class="card-body">

        <div class="info">

            <span class="label">
                Nomor
            </span>

            :

            {{ $kartu->nomor_kartu }}

        </div>

        <div class="info">

            <span class="label">
                Nama
            </span>

            :

            {{ $kartu->pengajuan->nama }}

        </div>

        <div class="info">

            <span class="label">
                NIK
            </span>

            :

            {{ $kartu->pengajuan->nik }}

        </div>

        <div class="info">

            <span class="label">
                Alamat
            </span>

            :

            {{ $kartu->pengajuan->alamat }}

        </div>

        <div class="info">

            <span class="label">
                Status
            </span>

            :

            <span class="status">
                AKTIF
            </span>

        </div>

        <div class="qr-section">

            <img
                src="{{ public_path('storage/'.$kartu->qr_code) }}"
                width="180">

            <p>

                Scan QR Code untuk verifikasi data

            </p>

        </div>

    </div>

    <div class="footer">

        © {{ date('Y') }} Sistem Kartu Sampah

    </div>

</div>

</body>
</html>
<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>Login - Sistem Kartu Sampah</title>

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet">

<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

    body{
        min-height:100vh;

        background:
        linear-gradient(
            135deg,
            #0f172a,
            #1e293b,
            #16a34a
        );

        overflow-x:hidden;
    }

    .login-card{

        backdrop-filter:blur(20px);

        background:
        rgba(
            255,
            255,
            255,
            0.08
        );

        border:
        1px solid rgba(
            255,
            255,
            255,
            0.15
        );

        border-radius:25px;

        box-shadow:
        0 20px 50px rgba(
            0,
            0,
            0,
            .3
        );

        color:white;
    }

    .brand-title{

        font-size:42px;

        font-weight:700;

    }

    .subtitle{

        color:#d1d5db;

    }

    .form-control{

        height:55px;

        border-radius:15px;

    }

    .btn-login{

        height:55px;

        border-radius:15px;

        font-weight:600;

    }

    .feature-box{

        background:
        rgba(
            255,
            255,
            255,
            .08
        );

        border-radius:15px;

        padding:15px;

    }

    /* =====================
       MOBILE RESPONSIVE
    ===================== */

    @media(max-width:991px){

        .brand-title{

            font-size:34px;

            text-align:center;

        }

        .subtitle{

            text-align:center;

        }

        .login-card{

            margin-top:20px;

        }

    }

    @media(max-width:768px){

        .brand-title{

            font-size:28px;

        }

        .card-body{

            padding:25px !important;

        }

        .feature-box{

            text-align:center;

        }

        .row.min-vh-100{

            min-height:auto;

        }

    }

</style>


</head>

<body>

<div class="container py-4">

```
<div class="row min-vh-100 align-items-center">

    <!-- LEFT -->

    <div class="col-lg-6 text-white mb-4 mb-lg-0">

        <h1 class="brand-title">

            ♻ Sistem Kartu Sampah

        </h1>

        <p class="lead subtitle">

            Platform Digital Pengelolaan
            Kartu Sampah Berbasis Web

        </p>

        <div class="row mt-4">

            <div class="col-md-6 mb-3">

                <div class="feature-box">

                    <h5>

                        <i class="bi bi-person-vcard"></i>

                        Kartu Digital

                    </h5>

                    <small>

                        Kartu otomatis dengan QR Code

                    </small>

                </div>

            </div>

            <div class="col-md-6 mb-3">

                <div class="feature-box">

                    <h5>

                        <i class="bi bi-shield-check"></i>

                        Aman

                    </h5>

                    <small>

                        Role & Permission Management

                    </small>

                </div>

            </div>

            <div class="col-md-6 mb-3">

                <div class="feature-box">

                    <h5>

                        <i class="bi bi-building"></i>

                        RT Digital

                    </h5>

                    <small>

                        Monitoring warga realtime

                    </small>

                </div>

            </div>

            <div class="col-md-6 mb-3">

                <div class="feature-box">

                    <h5>

                        <i class="bi bi-file-earmark-pdf"></i>

                        PDF Export

                    </h5>

                    <small>

                        Cetak kartu dan laporan

                    </small>

                </div>

            </div>

        </div>

    </div>

    <!-- RIGHT -->

    <div class="col-lg-5 offset-lg-1">

        <div class="card login-card">

            <div class="card-body p-5">

                <h3 class="mb-4">

                    Login

                </h3>

                @if(session('success'))

                    <div class="alert alert-success">

                        {{ session('success') }}

                    </div>

                @endif

                <form
                    method="POST"
                    action="{{ route('login') }}">

                    @csrf

                    <div class="mb-3">

                        <label>Email</label>

                        <input
                            type="email"
                            name="email"
                            class="form-control">

                    </div>

                    <div class="mb-4">

                        <label>Password</label>

                        <input
                            type="password"
                            name="password"
                            class="form-control">

                    </div>

                    <button
                        type="submit"
                        class="btn btn-success btn-login w-100">

                        <i class="bi bi-box-arrow-in-right"></i>

                        Login

                    </button>

                </form>

                <hr class="text-light">

                <a
                    href="{{ route('register') }}"
                    class="btn btn-outline-light w-100">

                    <i class="bi bi-person-plus"></i>

                    Register Warga

                </a>

            </div>

        </div>

    </div>

</div>


</div>

</body>

</html>

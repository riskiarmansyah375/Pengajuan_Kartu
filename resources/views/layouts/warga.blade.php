<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>@yield('title')</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet">

<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>

html,
body{
    height:100%;
    margin:0;
    padding:0;
    background:#f1f5f9;
    font-family:'Segoe UI',sans-serif;
}

/* ===== LAYOUT ===== */

.warga-layout{
    display:flex;
    min-height:calc(100vh - 60px);
}

/* ===== SIDEBAR ===== */

.warga-sidebar-wrapper{

    width:240px;
    min-width:240px;

    background:#198754;

    flex-shrink:0;

}

.warga-sidebar{

    width:240px;

    min-height:100%;

    background:#198754;

    color:white;

    padding:20px;

}

/* ===== CONTENT ===== */

.warga-main{

    flex:1;

    display:flex;

    flex-direction:column;

    min-width:0;

}

.warga-content{

    flex:1;

    padding:30px;

}

/* ===== NAVBAR ===== */

.warga-navbar{

    height:60px;

    background:#198754 !important;

}

/* ===== FOOTER ===== */

.warga-footer{

    background:#198754 !important;

    color:white;

    text-align:center;

    padding:15px;

    margin-top:auto;

}

/* ===== MENU ===== */

.menu-link{

    display:flex;

    align-items:center;

    gap:12px;

    color:white;

    text-decoration:none;

    padding:12px 15px;

    border-radius:10px;

    margin-bottom:8px;

    transition:.3s;

}

.menu-link:hover{

    background:rgba(255,255,255,.15);

    color:white;

}

/* ===== TABLE ===== */

.table-responsive{
    overflow-x:auto;
}

/* ===== MOBILE ===== */

@media(max-width:768px){

    .warga-layout{
        flex-direction:column;
    }

    .warga-sidebar-wrapper{
        width:100%;
        min-width:100%;
    }

    .warga-sidebar{
        width:100%;
        min-height:auto;
    }

    .warga-content{
        padding:15px;
    }

    .table{
        font-size:11px;
    }

    .btn{
        font-size:11px;
    }

}

</style>

</head>

<body>

@include('warga.partials.navbar')

<div class="warga-layout">

    <aside class="warga-sidebar-wrapper">

        @include('warga.partials.sidebar')

    </aside>

    <main class="warga-main">

        <div class="warga-content">

            @yield('content')

        </div>

        @include('warga.partials.footer')

    </main>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
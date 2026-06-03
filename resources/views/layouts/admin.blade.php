<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport"
      content="width=device-width, initial-scale=1.0">

<title>@yield('title')</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<link
rel="stylesheet"
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

/* =========================
   LAYOUT
========================= */

.admin-layout{
    display:flex;
    min-height:calc(100vh - 60px);
}

/* =========================
   SIDEBAR
========================= */

.sidebar-wrapper{

    width:240px;

    min-width:240px;

    background:#020617;

    flex-shrink:0;

    min-height:calc(100vh - 60px);

}

.sidebar-premium{

    background:#020617;

    color:white;

    min-height:calc(100vh - 60px);

    padding:24px;

    display:flex;

    flex-direction:column;

}

/* =========================
   LOGO
========================= */

.logo-box{
    display:flex;
    align-items:center;
    gap:15px;
    margin-bottom:30px;
}

.logo-icon{
    width:55px;
    height:55px;
    border-radius:18px;

    background:
    linear-gradient(
        135deg,
        #10b981,
        #22c55e
    );

    display:flex;
    justify-content:center;
    align-items:center;

    color:white;
    font-size:24px;
}

/* =========================
   USER
========================= */

.user-box{
    display:flex;
    align-items:center;
    gap:15px;
}

.avatar{

    width:55px;
    height:55px;

    border-radius:50%;

    background:
    linear-gradient(
        135deg,
        #3b82f6,
        #22c55e
    );

    display:flex;
    justify-content:center;
    align-items:center;

    color:white;
    font-size:20px;
    font-weight:bold;

}

.sidebar-divider{
    border-color:rgba(255,255,255,.15);
    margin:25px 0;
}

/* =========================
   MENU
========================= */

.nav.flex-column{
    width:100%;
}

.nav.flex-column li{
    width:100%;
}

.menu-link{

    display:flex;
    align-items:center;
    gap:15px;

    color:white;
    text-decoration:none;

    padding:14px 18px;

    border-radius:14px;

    margin-bottom:10px;

    transition:.3s;

}

.menu-link:hover{

    color:white;

    background:
    linear-gradient(
        135deg,
        #2563eb,
        #22c55e
    );

}

/* =========================
   CONTENT
========================= */

.main-content{

    flex:1;

    display:flex;

    flex-direction:column;

    min-width:0;

}

.content-area{

    flex:1;

    padding:30px;

    overflow-x:auto;

}

/* =========================
   NAVBAR
========================= */

.premium-navbar{

    background:#020617 !important;

    min-height:60px;

}

/* =========================
   FOOTER
========================= */

.premium-footer{

    background:#020617 !important;

    color:white;

    text-align:center;

    padding:18px;

    margin-top:auto;

}

/* =========================
   TABLE
========================= */

.table-responsive{
    overflow-x:auto;
}

/* =========================
   MOBILE
========================= */

@media(max-width:768px){

    .admin-layout{
        flex-direction:column;
    }

    .sidebar-wrapper{
        width:100%;
        min-width:100%;
        min-height:auto;
    }

    .sidebar-premium{
        min-height:auto;
    }

    .content-area{
        padding:15px;
    }

    h1{
        font-size:24px !important;
    }

    h2{
        font-size:22px !important;
    }

    h3{
        font-size:20px !important;
    }

    .table{
        font-size:11px !important;
    }

    .btn{
        font-size:11px !important;
    }

    .badge{
        font-size:10px !important;
    }

}

</style>

</head>

<body>

@include('admin.partials.navbar')

<div class="admin-layout">

    <div class="sidebar-wrapper">

        @include('admin.partials.sidebar')

    </div>

    <div class="main-content">

        <div class="content-area">

            @yield('content')

        </div>

        @include('admin.partials.footer')

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>


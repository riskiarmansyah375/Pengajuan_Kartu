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

/* NAVBAR */

.rt-navbar{
    height:60px;
    background:#0d6efd;
}

/* LAYOUT */

.rt-layout{
    display:flex;
    min-height:calc(100vh - 60px);
}

/* SIDEBAR */

.rt-sidebar-wrapper{

    width:240px;

    min-width:240px;

    background:#0d6efd;

    flex-shrink:0;

}

.rt-sidebar{

    width:240px;

    min-height:100%;

    background:#0d6efd;

    color:white;

    padding:24px;

}

/* CONTENT */

.rt-main{

    flex:1;

    display:flex;

    flex-direction:column;

    min-width:0;

}

.rt-content{

    flex:1;

    padding:30px;

}

/* FOOTER */

.rt-footer{

    background:#0d6efd;

    color:white;

    text-align:center;

    padding:15px;

}

/* MENU */

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

/* MOBILE */

@media(max-width:768px){

    .rt-layout{
        flex-direction:column;
    }

    .rt-sidebar-wrapper{
        width:100%;
        min-width:100%;
    }

    .rt-sidebar{
        width:100%;
    }

    .rt-content{
        padding:15px;
    }

}

</style>

</head>

<body>

@include('rt.partials.navbar')

<div class="rt-layout">

    <aside class="rt-sidebar-wrapper">

        @include('rt.partials.sidebar')

    </aside>

    <main class="rt-main">

        <div class="rt-content">

            @yield('content')

        </div>

        @include('rt.partials.footer')

    </main>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
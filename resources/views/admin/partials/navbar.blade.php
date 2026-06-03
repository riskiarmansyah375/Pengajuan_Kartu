<nav class="navbar navbar-dark premium-navbar shadow-sm">

<div class="container-fluid">

    <a class="navbar-brand fw-bold"
       href="#">

        Sistem Kartu Sampah

    </a>

    <div class="d-flex align-items-center">

        <span class="text-white user-name">

            {{ auth()->user()->name }}

        </span>

        <form
            action="{{ route('logout') }}"
            method="POST"
            class="ms-2">

            @csrf

            <button
                class="btn btn-danger btn-sm">

                Logout

            </button>

        </form>

    </div>

</div>

</nav>

<style>

   

.premium-navbar{

    background:
    linear-gradient(
        180deg,
        #020617,
        #0f172a,
        #1e293b
    );

}

.user-name{

    font-size:14px;

    font-weight:600;

}

@media (max-width:576px){

    .navbar-brand{

        font-size:12px;

    }

    .user-name{

        font-size:11px;

        max-width:80px;

        overflow:hidden;

        text-overflow:ellipsis;

        white-space:nowrap;

    }

    .btn-sm{

        padding:4px 8px;

        font-size:11px;

    }

}

</style>

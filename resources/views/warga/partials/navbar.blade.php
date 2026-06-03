<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm">

<div class="container-fluid">

    <div class="d-flex align-items-center">

        <button
            class="btn btn-light btn-sm d-md-none me-2"
            data-bs-toggle="offcanvas"
            data-bs-target="#mobileSidebar">

            <i class="bi bi-list"></i>

        </button>

        <a
            class="navbar-brand fw-bold"
            href="#">

            ♻ Sistem Kartu Sampah

        </a>

    </div>

    <div class="d-flex align-items-center">

        <span class="text-white me-3 d-none d-sm-inline">

            {{ auth()->user()->name }}

        </span>

        <form
            action="{{ route('logout') }}"
            method="POST">

            @csrf

            <button
                class="btn btn-light btn-sm">

                Logout

            </button>

        </form>

    </div>

</div>

</nav>

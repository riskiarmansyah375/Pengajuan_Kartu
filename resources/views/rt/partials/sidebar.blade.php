<div class="bg-primary text-white vh-100 p-3">

<h3 class="fw-bold">

    RT

</h3>

<hr>

<ul class="nav flex-column">

    <li class="nav-item mb-3">

        <a
            href="{{ route('rt.dashboard') }}"
            class="text-white text-decoration-none">

            <i class="bi bi-grid-fill me-2"></i>

            Dashboard

        </a>

    </li>

    <li class="nav-item mb-3">

        <a
            href="{{ route('rt.warga.index') }}"
            class="text-white text-decoration-none">

            <i class="bi bi-people-fill me-2"></i>

            Data Warga

        </a>

    </li>

    <li class="nav-item mb-3">

        <a
            href="{{ route('rt.kartu.index') }}"
            class="text-white text-decoration-none">

            <i class="bi bi-credit-card-fill me-2"></i>

            Data Kartu Sampah

        </a>

    </li>

    <li class="nav-item mb-3">

        <a
            href="{{ route('rt.laporan.index') }}"
            class="text-white text-decoration-none">

            <i class="bi bi-bar-chart-fill me-2"></i>

            Laporan

        </a>

    </li>

</ul>


</div>

<div class="bg-success text-white vh-100 p-3">

<h3 class="fw-bold">

    WARGA

</h3>

<hr>

<ul class="nav flex-column">

    <li class="nav-item mb-3">

        <a
            href="{{ route('warga.dashboard') }}"
            class="text-white text-decoration-none">

            <i class="bi bi-grid-fill me-2"></i>

            Dashboard

        </a>

    </li>

    <li class="nav-item mb-3">

        <a
            href="{{ route('warga.pengajuan.create') }}"
            class="text-white text-decoration-none">

            <i class="bi bi-file-earmark-plus-fill me-2"></i>

            Ajukan Kartu

        </a>

    </li>

    <li class="nav-item mb-3">

        <a
            href="{{ route('warga.pengajuan.index') }}"
            class="text-white text-decoration-none">

            <i class="bi bi-clock-history me-2"></i>

            Status Pengajuan

        </a>

    </li>

    <li class="nav-item mb-3">

        <a
            href="{{ route('warga.kartu.index') }}"
            class="text-white text-decoration-none">

            <i class="bi bi-credit-card-fill me-2"></i>

            Kartu Saya

        </a>

    </li>

</ul>

</div>

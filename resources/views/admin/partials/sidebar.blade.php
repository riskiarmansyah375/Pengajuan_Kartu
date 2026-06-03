<div class="sidebar-premium">

    <div class="logo-box">

        <div class="logo-icon">
            ♻
        </div>

        <div>
            <h5 class="mb-0 fw-bold">
                Kartu Sampah
            </h5>

            <small class="text-light">
                Smart Management
            </small>
        </div>

    </div>

    <div class="user-box">

        <div class="avatar">
            {{ strtoupper(substr(auth()->user()->name,0,1)) }}
        </div>

        <div>
            <div class="fw-bold">
                {{ auth()->user()->name }}
            </div>

            <small>
                {{ auth()->user()->role->name }}
            </small>
        </div>

    </div>

    <hr class="sidebar-divider">

    <ul class="nav flex-column">

        <li>
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class="bi bi-grid-fill"></i>
                Dashboard
            </a>
        </li>

        <li>
            <a href="{{ route('admin.users.index') }}" class="menu-link">
                <i class="bi bi-people-fill"></i>
                User
            </a>
        </li>

        <li>
            <a href="{{ route('admin.roles.index') }}" class="menu-link">
                <i class="bi bi-person-badge-fill"></i>
                Role
            </a>
        </li>

        <li>
            <a href="{{ route('admin.permissions.index') }}" class="menu-link">
                <i class="bi bi-shield-lock-fill"></i>
                Permission
            </a>
        </li>

        <li>
            <a href="{{ route('admin.pengajuans.index') }}" class="menu-link">
                <i class="bi bi-file-earmark-text-fill"></i>
                Pengajuan
            </a>
        </li>

        <li>
            <a href="{{ route('admin.kartus.index') }}" class="menu-link">
                <i class="bi bi-credit-card-fill"></i>
                Kartu Sampah
            </a>
        </li>

        <li>
            <a href="{{ route('admin.laporan.index') }}" class="menu-link">
                <i class="bi bi-bar-chart-fill"></i>
                Laporan
            </a>
        </li>

    </ul>

</div>


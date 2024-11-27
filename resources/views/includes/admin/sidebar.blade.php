<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link  {{ request()->is('dashboard') ? '' : 'collapsed' }}"
                href="{{ route('dashboard-admin') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link  {{ request()->is('dashboard/users') ? '' : 'collapsed' }}"
                href="{{ route('livewire-user') }}">
                <i class="bi bi-people"></i>
                <span>Siswa</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link  {{ request()->is('dashboard/paslon') ? '' : 'collapsed' }}"
                href="{{ route('dashboard.paslon.index') }}">
                <i class="bi bi-person-square"></i>
                <span>Paslon</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link  {{ request()->is('dashboard/data-admin*') ? '' : 'collapsed' }}"
                href="{{ route('data-admin.index') }}">
                <i class="bi bi-person-square"></i>
                <span>Admin</span>
            </a>
        </li>

    </ul>

</aside>

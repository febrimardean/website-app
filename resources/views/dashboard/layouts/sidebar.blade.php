<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Dashboard</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Company</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/department*') ? 'active' : '' }}" href="/dashboard/department">
                    <span data-feather="layers"></span>
                    Departemen
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/division*') ? 'active' : '' }}" href="/dashboard/division">
                    <span data-feather="layout"></span>
                    Divisi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/position*') ? 'active' : '' }}" href="/dashboard/position">
                    <span data-feather="columns"></span>
                    Posisi Pekerjaan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/employee*') ? 'active' : '' }}" href="/dashboard/employee">
                    <span data-feather="users"></span>
                    Pegawai
                </a>
            </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Posts</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                    <span data-feather="grid"></span>
                    My Posts
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
                    <span data-feather="grid"></span>
                    Post Categories
                </a>
            </li>
        </ul>
        @can('super.user')
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Users</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/users*') ? 'active' : '' }}" href="/dashboard/users">
                    <span data-feather="user-plus"></span>
                    Users
                </a>
            </li>
        </ul>
        @endcan
    </div>
</nav>

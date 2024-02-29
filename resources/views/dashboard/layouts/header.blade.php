<header class="navbar-white sticky-top bg-white flex-md-nowrap shadow py-3 mb-3 border-bottom">
    <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr;">
        <a class=" col-md-3 col-lg-2 me-0 px-3 text-decoration-none" href="#">Admin LOGO</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="d-flex justify-content-end">
            <div class="flex-shrink-0 dropdown justify-content-end">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle"> {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </ul>
            </div>
        </div>
    </div>
</header>

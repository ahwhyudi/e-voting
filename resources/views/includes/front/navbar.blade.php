<header id="header" class="fixed-top d-flex align-items-center">
    <div
        class="
                    container
                    d-flex
                    align-items-center
                    justify-content-between
                ">
        <div class="logo">
            <a href="/">
                <img src="{{ asset('images/osis.png') }}" alt="" /> </a>Osis SMK XYZ
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li>
                    <a class="nav-link scrollto  {{ request()->is('/') ? 'active' : '' }}"
                        href="{{ route('depan') }}">Home</a>
                </li>
                {{-- <li>
                    <a class="nav-link scrollto {{ request()->is('/') ? 'active' : '' }}"
                        href="#">Tulisan</a>
                </li> --}}
                <li>
                    <a class="nav-link scrollto {{ request()->is('/') ? 'active' : '' }}"
                        href="#calon"> Kandidat</a>
                </li>
                @guest
                    <li>
                        <a class="getstarted scrollto btn btn-primary rounded-pill" href="{{ route('login') }}">Login</a>
                    </li>
                @endguest
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endauth
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
    </div>
</header>

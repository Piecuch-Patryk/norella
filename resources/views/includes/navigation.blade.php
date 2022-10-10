<nav class="navbar navbar-expand-lg navbar-dark p-0 px-1 main--nav">
    <div class="container-fluid">
        <a href="{{ route('main.index') }}">
            <img src="{{ asset('storage/assets/logo/norella.png') }}" class="logo" alt="Norella logo">
        </a>
        <button class="navbar-toggler border-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav ms-auto me-0">
                <li class="nav-item {{ Route::is('main.index') ? 'active' : '' }}">
                    <a class="nav-link mx-md-3 py-lg-1" href="{{ route('main.index') }}">Strona Główna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-md-3 py-lg-1" href="#">Oferta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-md-3 py-lg-1" href="#">Cennik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-md-3 py-lg-1" href="#">Opinie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-md-3 py-lg-1" href="#">Galeria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-md-3 py-lg-1" href="#">O nas</a>
                </li>
            </ul>

            @auth
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-0 me-0">
                <!-- Authentication Links -->
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdownAdmin" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Zarządzaj
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownAdmin">
                        <a class="nav-link mx-md-3 py-lg-1 text-dark" href="{{ route('category.index') }}">Kategorie</a>
                    </div>
                </li>
            </ul>
            @endauth
        </div>
    </div>
</nav>
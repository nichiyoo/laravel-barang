<header class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="fw-bold navbar-brand fs-4" href="/">
            Toko A2
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto fs-6">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a href="{{ route('barangs.index') }}"
                            class="nav-link @if (request()->routeIs('barangs.index') || request()->routeIs('barangs.show')) active @endif">
                            Barang
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('barangs.create') }}"
                            class="nav-link @if (request()->routeIs('barangs.create')) active @endif">
                            Tambah Barang
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('pesanans.index') }}"
                            class="nav-link @if (request()->routeIs('pesanans.index')) active @endif">
                            Pesanan
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="dropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</header>

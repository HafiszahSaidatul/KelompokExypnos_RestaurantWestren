<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">
        <a class="navbar-brand" href="/">Affomato</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'about' ? 'active' : '' }}" href="/about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'rooftop' ? 'active' : '' }}" href="/rooftop">Rooftop
                        Moments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'menu' ? 'active' : '' }}" href="/menu">Our Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'contact' ? 'active' : '' }}" href="/contact">Contact Us</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i>
                                    My Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i>
                                        Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'login' ? 'active' : '' }}" href="/login"><i
                                class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
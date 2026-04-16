<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SINNER — Moda Old Money & Streetwear. Redefine las reglas.">
    <title>@yield('title', 'Redefine las Reglas')</title>

    {{-- Bootstrap 5 CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- Bootstrap Icons CDN --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- Vite CSS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body class="@yield('body-class', '')">

    {{-- ===== NAVBAR ===== --}}
    <nav class="navbar navbar-expand-lg navbar-sinner fixed-top">
        <div class="container">

            {{-- Brand --}}
            <a class="navbar-brand" href="{{ route('index') }}">SINNER</a>

            {{-- Toggler --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSinner" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- Links --}}
            <div class="collapse navbar-collapse" id="navbarSinner">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}" href="{{ route('index') }}">
                            Inicio
                        </a>
                    </li>

                    {{-- Catálogo con dropdown --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->routeIs('catalogo*','streetwear','oldmoney') ? 'active' : '' }}"
                           href="{{ route('catalogo') }}"
                           role="button"
                           data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Catálogo
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ route('streetwear') }}">
                                    <i class="bi bi-lightning-fill me-2" style="color: var(--red-sinner);"></i>
                                    Streetwear
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('oldmoney') }}">
                                    <i class="bi bi-gem me-2" style="color: var(--gold);"></i>
                                    Old Money
                                </a>
                            </li>
                            <li><hr class="dropdown-divider" style="border-color: rgba(201,168,76,0.2);"></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('catalogo') }}">
                                    <i class="bi bi-grid-3x3-gap me-2"></i>
                                    Ver Todo
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('nosotros') ? 'active' : '' }}" href="{{ route('nosotros') }}">
                            Nosotros
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('soporte') ? 'active' : '' }}" href="{{ route('soporte') }}">
                            Soporte
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('mensajes.index') ? 'active' : '' }}" href="{{ route('mensajes.index') }}">
                            Mensajes    
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    {{-- ===== MAIN CONTENT ===== --}}
    <main style="padding-top: 80px;">
        @yield('content')
    </main>

    {{-- ===== FOOTER ===== --}}
    <footer class="footer-sinner">
        <div class="container">
            <div class="row g-4">

                {{-- Brand column --}}
                <div class="col-lg-4 col-md-6">
                    <div class="footer-brand mb-1">SINNER</div>
                    <div class="footer-tagline mb-4">Redefine las Reglas</div>
                    <p class="text-white-50" style="font-size: 0.82rem; line-height: 1.8;">
                        Somos una marca que rompe los moldes. Fusionamos la elegancia del Old Money con la
                        rebeldía del Streetwear para quienes se niegan a elegir un solo camino.
                    </p>
                    <div class="mt-3">
                        <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-tiktok"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-pinterest"></i></a>
                    </div>
                </div>

                {{-- Colecciones --}}
                <div class="col-lg-2 col-md-6">
                    <div class="footer-heading">Colecciones</div>
                    <a href="{{ route('catalogo') }}" class="footer-link">Catálogo General</a>
                    <a href="{{ route('streetwear') }}" class="footer-link">Streetwear</a>
                    <a href="{{ route('oldmoney') }}" class="footer-link">Old Money</a>
                    <a href="#" class="footer-link">Novedades</a>
                    <a href="#" class="footer-link">Más Vendidos</a>
                </div>

                {{-- Información --}}
                <div class="col-lg-2 col-md-6">
                    <div class="footer-heading">Información</div>
                    <a href="{{ route('nosotros') }}" class="footer-link">Nosotros</a>
                    <a href="{{ route('soporte') }}" class="footer-link">Soporte</a>
                </div>

                {{-- Contacto --}}
                <div class="col-lg-4 col-md-6">
                    <div class="footer-heading">Contacto</div>
                    <div class="d-flex align-items-start mb-2">
                        <i class="bi bi-envelope me-2 mt-1" style="color: var(--gold); font-size: 0.8rem;"></i>
                        <span class="footer-link p-0">contacto@sinner.com</span>
                    </div>
                    <div class="d-flex align-items-start mb-2">
                        <i class="bi bi-whatsapp me-2 mt-1" style="color: var(--gold); font-size: 0.8rem;"></i>
                        <span class="footer-link p-0">+57 300 123 4567</span>
                    </div>
                    <div class="d-flex align-items-start mb-4">
                        <i class="bi bi-geo-alt me-2 mt-1" style="color: var(--gold); font-size: 0.8rem;"></i>
                        <span class="footer-link p-0">Colombia</span>
                    </div>

                </div>

            </div>

            <hr class="footer-divider my-4">

            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="footer-bottom">
                        &copy; {{ date('Y') }} SINNER. Todos los derechos reservados.
                    </div>
                </div>
                <div class="col-md-6 text-md-end mt-2 mt-md-0">
                    <div class="footer-creators">
                        <span style="color: rgba(245,240,232,0.3); font-size: 0.62rem; letter-spacing: 1px;">DISEÑADO POR</span>
                        &nbsp;
                        <span style="color: var(--gold);">Daniel Salcedo</span>
                    </div>
                </div>
            </div>

        </div>
    </footer>

    {{-- Bootstrap JS Bundle CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    @stack('scripts')
</body>
</html>
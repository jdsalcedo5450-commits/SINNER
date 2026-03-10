@extends('layouts.app')

@section('title', 'Inicio — SINNER')

@section('content')

{{-- ===== HERO SECTION ===== --}}
<section class="hero-section d-flex align-items-center position-relative">
    <div class="container position-relative" style="z-index: 2;">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-7 col-xl-6 py-5">
                <div class="animate-fade-in-up animate-delay-1">
                    <span class="tag-sinner mb-4 d-inline-block">Nueva Colección 2025</span>
                </div>
                <h1 class="hero-title animate-fade-in-up animate-delay-2">SINNER</h1>
                <div class="d-flex align-items-center my-3 animate-fade-in-up animate-delay-2">
                    <div class="deco-line-gold" style="width: 40px; margin-left: 0;"></div>
                    <p class="hero-subtitle ms-3 mb-0">Redefine las Reglas</p>
                </div>
                <p class="hero-description animate-fade-in-up animate-delay-3 mb-5">
                    Donde la elegancia del Old Money se fusiona con la rebeldía del Streetwear.
                    Ropa para quienes dictan sus propias normas.
                </p>
                <div class="d-flex flex-wrap gap-3 animate-fade-in-up animate-delay-4">
                    <a href="{{ route('catalogo') }}" class="btn-sinner-gold">
                        Explorar Colección
                    </a>
                    <a href="{{ route('nosotros') }}" class="btn-sinner-red">
                        Nuestra Historia
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Decorative elements --}}
    <div style="position: absolute; right: -100px; top: 50%; transform: translateY(-50%); font-family: 'Cinzel Decorative', serif; font-size: 22vw; font-weight: 900; color: rgba(201, 168, 76, 0.03); letter-spacing: 10px; white-space: nowrap; pointer-events: none; line-height: 1;">SINNER</div>

    {{-- Bottom gradient --}}
    <div style="position: absolute; bottom: 0; left: 0; right: 0; height: 200px; background: linear-gradient(0deg, rgba(10,10,10,1) 0%, transparent 100%);"></div>
</section>

{{-- ===== CAROUSEL ===== --}}
<section class="py-0">
    <div class="carousel-sinner" id="sinnerCarousel">
        <div id="mainCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="4"></button>
            </div>

            <div class="carousel-inner">
                {{-- Slide 1 --}}
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=1600&auto=format&fit=crop" alt="Colección SINNER">
                    <div class="carousel-caption-sinner">
                        <div class="container text-start">
                            <p>Colección Otoño / Invierno</p>
                            <h2>Old Money Elite</h2>
                            <a href="{{ route('oldmoney') }}" class="btn-sinner-gold mt-3 d-inline-block">Ver Colección</a>
                        </div>
                    </div>
                </div>

                {{-- Slide 2 --}}
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1523398002811-999ca8dec234?w=1600&auto=format&fit=crop" alt="Streetwear SINNER">
                    <div class="carousel-caption-sinner">
                        <div class="container text-start">
                            <p>Drop Exclusivo</p>
                            <h2>Streetwear Rebelde</h2>
                            <a href="{{ route('streetwear') }}" class="btn-sinner-red mt-3 d-inline-block">Ver Drop</a>
                        </div>
                    </div>
                </div>

                {{-- Slide 3 --}}
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1600&auto=format&fit=crop" alt="SINNER Style">
                    <div class="carousel-caption-sinner">
                        <div class="container text-start">
                            <p>Limited Edition</p>
                            <h2>The SINNER Look</h2>
                            <a href="{{ route('catalogo') }}" class="btn-sinner-gold mt-3 d-inline-block">Comprar Ahora</a>
                        </div>
                    </div>
                </div>

                {{-- Slide 4 --}}
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1551232864-3f0890e580d9?w=1600&auto=format&fit=crop" alt="Fashion SINNER">
                    <div class="carousel-caption-sinner">
                        <div class="container text-start">
                            <p>Nueva Entrega</p>
                            <h2>Elegancia Oscura</h2>
                            <a href="{{ route('oldmoney') }}" class="btn-sinner-gold mt-3 d-inline-block">Descubrir</a>
                        </div>
                    </div>
                </div>

                {{-- Slide 5 --}}
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1509631179647-0177331693ae?w=1600&auto=format&fit=crop" alt="Urban SINNER">
                    <div class="carousel-caption-sinner">
                        <div class="container text-start">
                            <p>Urban Collection</p>
                            <h2>Street Culture</h2>
                            <a href="{{ route('streetwear') }}" class="btn-sinner-red mt-3 d-inline-block">Explorar</a>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</section>

{{-- ===== CATEGORIES SECTION ===== --}}
<section class="py-5" style="background: var(--deep-black);">
    <div class="container py-4">
        <div class="row text-center mb-5">
            <div class="col">
                <p class="section-subtitle animate-fade-in-up">Explora</p>
                <h2 class="section-title text-gradient-gold animate-fade-in-up animate-delay-1">Nuestras Colecciones</h2>
                <div class="section-line"></div>
            </div>
        </div>

        <div class="row g-4">
            {{-- Old Money --}}
            <div class="col-md-6">
                <div class="position-relative overflow-hidden" style="height: 500px;">
                    <img src="https://images.unsplash.com/photo-1617127365659-c47fa864d8bc?w=800&auto=format&fit=crop"
                         alt="Old Money"
                         class="w-100 h-100"
                         style="object-fit: cover; filter: brightness(0.5); transition: transform 0.8s ease;">
                    <div class="position-absolute inset-0" style="inset: 0; background: linear-gradient(135deg, rgba(201,168,76,0.15) 0%, transparent 60%, rgba(0,0,0,0.8) 100%);"></div>
                    <div class="position-absolute bottom-0 start-0 p-4 p-lg-5">
                        <span class="tag-sinner mb-3 d-inline-block">Elegancia Atemporal</span>
                        <h3 class="font-cinzel-deco" style="font-size: 2rem; color: var(--gold-light); letter-spacing: 3px;">OLD MONEY</h3>
                        <p class="text-white-50 mb-3" style="font-size: 0.82rem; line-height: 1.7;">Sofisticación y clase que trasciende el tiempo.</p>
                        <a href="{{ route('oldmoney') }}" class="btn-sinner-gold">Explorar</a>
                    </div>
                    <a href="{{ route('oldmoney') }}" class="stretched-link"></a>
                </div>
            </div>

            {{-- Streetwear --}}
            <div class="col-md-6">
                <div class="position-relative overflow-hidden" style="height: 500px;">
                    <img src="https://images.unsplash.com/photo-1571945153237-4929e783af4a?w=800&auto=format&fit=crop"
                         alt="Streetwear"
                         class="w-100 h-100"
                         style="object-fit: cover; filter: brightness(0.4); transition: transform 0.8s ease;">
                    <div class="position-absolute" style="inset: 0; background: linear-gradient(135deg, rgba(196,30,58,0.1) 0%, transparent 60%, rgba(0,0,0,0.9) 100%);"></div>
                    <div class="position-absolute bottom-0 start-0 p-4 p-lg-5">
                        <span class="tag-sinner mb-3 d-inline-block" style="border-color: rgba(196,30,58,0.5); color: var(--red-sinner);">Drop Exclusivo</span>
                        <h3 class="font-cinzel-deco" style="font-size: 2rem; color: var(--red-sinner); letter-spacing: 3px;">STREETWEAR</h3>
                        <p class="text-white-50 mb-3" style="font-size: 0.82rem; line-height: 1.7;">Actitud urbana. Sin reglas. Sin límites.</p>
                        <a href="{{ route('streetwear') }}" class="btn-sinner-red">Explorar</a>
                    </div>
                    <a href="{{ route('streetwear') }}" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== FEATURES ===== --}}
<section class="py-5" style="background: var(--pure-black); border-top: 1px solid rgba(201,168,76,0.1);">
    <div class="container py-4">
        <div class="row g-4">
            <div class="col-6 col-md-3">
                <div class="feature-box">
                    <div class="feature-icon"><i class="bi bi-truck"></i></div>
                    <div class="feature-text">Envío Express</div>
                    <p class="text-white-50 mt-2 mb-0" style="font-size: 0.75rem;">Todo Colombia</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="feature-box">
                    <div class="feature-icon"><i class="bi bi-shield-check"></i></div>
                    <div class="feature-text">100% Auténtico</div>
                    <p class="text-white-50 mt-2 mb-0" style="font-size: 0.75rem;">Calidad garantizada</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="feature-box">
                    <div class="feature-icon"><i class="bi bi-arrow-return-left"></i></div>
                    <div class="feature-text">30 Días</div>
                    <p class="text-white-50 mt-2 mb-0" style="font-size: 0.75rem;">Devolución gratis</p>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="feature-box">
                    <div class="feature-icon"><i class="bi bi-headset"></i></div>
                    <div class="feature-text">Soporte 24/7</div>
                    <p class="text-white-50 mt-2 mb-0" style="font-size: 0.75rem;">Siempre disponible</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== FEATURED PRODUCTS ===== --}}
<section class="py-5" style="background: var(--deep-black);">
    <div class="container py-4">
        <div class="row text-center mb-5">
            <div class="col">
                <p class="section-subtitle">Selección</p>
                <h2 class="section-title text-gradient-gold">Destacados</h2>
                <div class="section-line"></div>
            </div>
        </div>

        <div class="row g-3">
            @php
                $featured = [
                    ['img' => 'https://i.pinimg.com/736x/ab/93/c9/ab93c9467a43c074d8485984954007cd.jpg', 'name' => 'Classic Blazer', 'price' => '$489.000', 'badge' => 'Old Money'],
                    ['img' => 'https://i.pinimg.com/736x/85/27/fc/8527fc8ca46e9f8e1515b0fa97a89230.jpg', 'name' => 'Urban Hoodie', 'price' => '$179.000', 'badge' => 'Streetwear'],
                    ['img' => 'https://i.pinimg.com/736x/c1/ab/8f/c1ab8f4c6d72911661d420fb8ddca753.jpg', 'name' => 'Silk Dress Shirt', 'price' => '$319.000', 'badge' => 'Nuevo'],
                    ['img' => 'https://i.pinimg.com/736x/56/ec/46/56ec46df5f52c1754b61a20bf7e4e04d.jpg', 'name' => 'Drop Sneaker', 'price' => '$349.000', 'badge' => 'Limitado'],
                ];
            @endphp

            @foreach($featured as $item)
            <div class="col-6 col-lg-3">
                <div class="product-card">
                    <span class="product-badge">{{ $item['badge'] }}</span>
                    <img src="{{ $item['img'] }}" alt="{{ $item['name'] }}">
                    <div class="product-card-overlay">
                        <div class="product-price">{{ $item['price'] }}</div>
                        <div class="product-name">{{ $item['name'] }}</div>
                        <a href="{{ route('catalogo') }}" class="btn-sinner-gold mt-2" style="padding: 0.5rem 1.5rem; font-size: 0.65rem;">Ver Más</a>
                    </div>
                    <div class="product-info">
                        <h5>{{ $item['name'] }}</h5>
                        <span class="price">{{ $item['price'] }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-5">
            <a href="{{ route('catalogo') }}" class="btn-sinner-gold">Ver Catálogo Completo</a>
        </div>
    </div>
</section>

{{-- ===== QUOTE BANNER ===== --}}
<section class="py-5 text-center" style="background: linear-gradient(135deg, var(--pure-black) 0%, rgba(201,168,76,0.05) 50%, var(--pure-black) 100%); border-top: 1px solid rgba(201,168,76,0.15); border-bottom: 1px solid rgba(201,168,76,0.15);">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="deco-line-gold"></div>
                <blockquote class="font-cinzel" style="font-size: clamp(1rem, 2.5vw, 1.5rem); letter-spacing: 3px; color: var(--gold-light); font-style: italic; display: inline; margin: 0 1rem;">
                    "No sigues la moda. Tú eres la moda."
                </blockquote>
                <div class="deco-line-gold"></div>
                <p class="mt-3 section-subtitle">— SINNER Philosophy</p>
            </div>
        </div>
    </div>
</section>

@endsection
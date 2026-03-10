@extends('layouts.app')

@section('title', 'Streetwear — SINNER')
@section('body-class', 'streetwear-page')

@section('content')

{{-- HERO --}}
<section class="streetwear-hero">
    <div class="container position-relative" style="z-index: 2;">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <span class="animate-fade-in-up" style="font-family: 'Cinzel', serif; font-size: 0.62rem; letter-spacing: 5px; color: var(--red-sinner); text-transform: uppercase; display: block; margin-bottom: 1rem;">Drop Exclusivo 2025</span>
                <h1 class="streetwear-title animate-fade-in-up animate-delay-1">Streetwear</h1>
                <div class="animate-fade-in-up animate-delay-2">
                    <div class="deco-line-gold" style="background: var(--red-sinner);"></div>
                    <span class="streetwear-subtitle mx-3">Sin Reglas. Sin Límites.</span>
                    <div class="deco-line-gold" style="background: var(--red-sinner);"></div>
                </div>
                <p class="animate-fade-in-up animate-delay-3 mt-4" style="color: rgba(245,240,232,0.6); font-size: 0.9rem; letter-spacing: 1px; max-width: 500px; margin: 1rem auto 0;">
                    Ropa urbana con actitud. Cada pieza es una declaración de guerra contra lo ordinario.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- STATS --}}
<section style="background: #0d0000; border-bottom: 1px solid rgba(196,30,58,0.2); padding: 1.5rem 0;">
    <div class="container">
        <div class="row text-center">
            <div class="col-4">
                <div style="font-family: 'Cinzel Decorative', serif; font-size: 1.8rem; color: var(--red-sinner);">48+</div>
                <div style="font-family: 'Cinzel', serif; font-size: 0.6rem; letter-spacing: 2px; color: rgba(245,240,232,0.4);">PIEZAS</div>
            </div>
            <div class="col-4" style="border-left: 1px solid rgba(196,30,58,0.2); border-right: 1px solid rgba(196,30,58,0.2);">
                <div style="font-family: 'Cinzel Decorative', serif; font-size: 1.8rem; color: var(--red-sinner);">3</div>
                <div style="font-family: 'Cinzel', serif; font-size: 0.6rem; letter-spacing: 2px; color: rgba(245,240,232,0.4);">DROPS</div>
            </div>
            <div class="col-4">
                <div style="font-family: 'Cinzel Decorative', serif; font-size: 1.8rem; color: var(--red-sinner);">∞</div>
                <div style="font-family: 'Cinzel', serif; font-size: 0.6rem; letter-spacing: 2px; color: rgba(245,240,232,0.4);">ACTITUD</div>
            </div>
        </div>
    </div>
</section>

{{-- PRODUCTS --}}
<section class="streetwear-section py-5">
    <div class="container py-4">

        {{-- Filter --}}
        <div class="catalog-filter text-center" style="background: #1a0000; border-color: rgba(196,30,58,0.2);">
            <button class="filter-btn active" style="border-color: rgba(196,30,58,0.4); color: var(--off-white);">Todos</button>
            <button class="filter-btn" style="border-color: rgba(196,30,58,0.4); color: var(--off-white);">Hoodies</button>
            <button class="filter-btn" style="border-color: rgba(196,30,58,0.4); color: var(--off-white);">Camisetas</button>
            <button class="filter-btn" style="border-color: rgba(196,30,58,0.4); color: var(--off-white);">Pantalones</button>
            <button class="filter-btn" style="border-color: rgba(196,30,58,0.4); color: var(--off-white);">Accesorios</button>
        </div>

        <div class="row text-center mb-5">
            <div class="col">
                <h2 class="section-title animate-fade-in-up" style="background: linear-gradient(135deg, var(--red-sinner), var(--red-dark)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                    Drop Collection
                </h2>
                <div class="section-line" style="background: linear-gradient(90deg, transparent, var(--red-sinner), transparent);"></div>
            </div>
        </div>

        @php
            $streetItems = [
                ['img' => 'https://images.unsplash.com/photo-1512327428394-b99f62e16f1f?w=600', 'name' => 'Rebel Hoodie', 'price' => '$179.000', 'tag' => 'Drop #1'],
                ['img' => 'https://images.unsplash.com/photo-1523398002811-999ca8dec234?w=600', 'name' => 'Street Cap', 'price' => '$89.000', 'tag' => 'Nuevo'],
                ['img' => 'https://images.unsplash.com/photo-1571945153237-4929e783af4a?w=600', 'name' => 'Cargo Pants', 'price' => '$239.000', 'tag' => 'Drop #2'],
                ['img' => 'https://images.unsplash.com/photo-1509631179647-0177331693ae?w=600', 'name' => 'Bomber Jacket', 'price' => '$389.000', 'tag' => 'Limitado'],
                ['img' => 'https://images.unsplash.com/photo-1605348532760-6753d2c43329?w=600', 'name' => 'Oversized Tee', 'price' => '$129.000', 'tag' => 'Drop #1'],
                ['img' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=600', 'name' => 'Urban Sneakers', 'price' => '$349.000', 'tag' => 'Drop #3'],
                ['img' => 'https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=600', 'name' => 'Street Shirt', 'price' => '$149.000', 'tag' => 'Nuevo'],
                ['img' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600', 'name' => 'Jogger Pro', 'price' => '$169.000', 'tag' => 'Drop #2'],
            ];
        @endphp

        <div class="row g-3">
            @foreach($streetItems as $item)
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product-card streetwear-card">
                    <span class="product-badge" style="background: var(--red-sinner);">{{ $item['tag'] }}</span>
                    <img src="{{ $item['img'] }}" alt="{{ $item['name'] }}">
                    <div class="product-card-overlay" style="background: rgba(0,0,0,0.82);">
                        <div class="product-price" style="background: linear-gradient(135deg, #ff4444, var(--red-sinner)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">{{ $item['price'] }}</div>
                        <div class="product-name">{{ $item['name'] }}</div>
                        <a href="#" class="btn-sinner-red mt-2" style="padding: 0.5rem 1.5rem; font-size: 0.62rem;">Agregar</a>
                    </div>
                    <div class="product-info" style="background: #0d0000; border-top: 1px solid rgba(196,30,58,0.2);">
                        <h5>{{ $item['name'] }}</h5>
                        <span class="price" style="color: var(--red-sinner);">{{ $item['price'] }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-5 text-center" style="background: linear-gradient(135deg, var(--pure-black) 0%, #1a0000 50%, var(--pure-black) 100%); border-top: 1px solid rgba(196,30,58,0.2);">
    <div class="container py-4">
        <h2 class="section-title mb-3" style="background: linear-gradient(135deg, var(--red-sinner), var(--red-dark)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
            Únete a la Rebelión
        </h2>
        <p style="color: rgba(245,240,232,0.5); font-size: 0.85rem; margin-bottom: 2rem;">Sé el primero en recibir los nuevos drops.</p>
        <a href="{{ route('soporte') }}" class="btn-sinner-red me-3">Contáctanos</a>
        <a href="{{ route('catalogo') }}" class="btn-sinner-gold">Ver Todo</a>
    </div>
</section>

@push('scripts')
<script>
// Streetwear filter buttons red hover
document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('mouseenter', () => {
        if (!btn.classList.contains('active')) {
            btn.style.background = 'var(--red-sinner)';
            btn.style.borderColor = 'var(--red-sinner)';
            btn.style.color = 'white';
        }
    });
    btn.addEventListener('mouseleave', () => {
        if (!btn.classList.contains('active')) {
            btn.style.background = 'transparent';
            btn.style.borderColor = 'rgba(196,30,58,0.4)';
            btn.style.color = 'var(--off-white)';
        }
    });
    btn.addEventListener('click', () => {
        document.querySelectorAll('.filter-btn').forEach(b => {
            b.classList.remove('active');
            b.style.background = 'transparent';
            b.style.color = 'var(--off-white)';
        });
        btn.classList.add('active');
        btn.style.background = 'var(--red-sinner)';
        btn.style.borderColor = 'var(--red-sinner)';
        btn.style.color = 'white';
    });
});
</script>
@endpush

@endsection
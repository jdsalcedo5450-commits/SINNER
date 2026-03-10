@extends('layouts.app')

@section('title', 'Old Money — SINNER')
@section('body-class', 'oldmoney-page')

@push('styles')
<style>
    body.oldmoney-page { background: var(--off-white) !important; }
    body.oldmoney-page .navbar-sinner { background: rgba(255,255,255,0.97) !important; border-bottom: 1px solid var(--gold-light); }
    body.oldmoney-page .navbar-sinner .nav-link { color: var(--deep-black) !important; }
    body.oldmoney-page .navbar-sinner .nav-link:hover { color: var(--gold-dark) !important; }
    body.oldmoney-page .navbar-sinner .navbar-brand { background: linear-gradient(135deg, var(--gold-dark), var(--gold)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    body.oldmoney-page .navbar-toggler-icon { filter: none; }
    body.oldmoney-page .dropdown-menu { background: rgba(255,255,255,0.99); border-color: var(--gold-light); }
    body.oldmoney-page .dropdown-item { color: var(--deep-black); }
    body.oldmoney-page .dropdown-item:hover { background: rgba(201,168,76,0.08); color: var(--gold-dark); }
</style>
@endpush

@section('content')

{{-- HERO --}}
<section class="oldmoney-hero">
    <div class="container position-relative" style="z-index: 2;">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <span class="animate-fade-in-up" style="font-family: 'Cinzel', serif; font-size: 0.62rem; letter-spacing: 5px; color: var(--gold-dark); text-transform: uppercase; display: block; margin-bottom: 1rem;">Colección Atemporal 2025</span>
                <h1 class="oldmoney-title animate-fade-in-up animate-delay-1">Old Money</h1>
                <div class="animate-fade-in-up animate-delay-2">
                    <div class="deco-line-gold"></div>
                    <span class="oldmoney-subtitle mx-3">Elegancia que Trasciende</span>
                    <div class="deco-line-gold"></div>
                </div>
                <p class="animate-fade-in-up animate-delay-3 mt-4" style="color: var(--gold-dark); font-size: 0.9rem; letter-spacing: 1px; max-width: 520px; margin: 1rem auto 0;">
                    Prendas que narran historias de sofisticación, herencia y distinción. Para quienes comprenden que el estilo verdadero no caduca.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- PILLARS --}}
<section style="background: linear-gradient(180deg, var(--pure-white) 0%, var(--off-white) 100%); padding: 4rem 0; border-bottom: 1px solid rgba(201,168,76,0.2);">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div style="padding: 2rem; border: 1px solid rgba(201,168,76,0.2); background: rgba(201,168,76,0.03);">
                    <i class="bi bi-stars" style="font-size: 2rem; color: var(--gold); display: block; margin-bottom: 1rem;"></i>
                    <div style="font-family: 'Cinzel', serif; font-size: 0.75rem; letter-spacing: 3px; color: var(--gold-dark); text-transform: uppercase; margin-bottom: 0.5rem;">Materiales Premium</div>
                    <p style="font-size: 0.8rem; color: rgba(10,10,10,0.6); line-height: 1.7;">Cachemira, lino, seda y lana de primera calidad en cada pieza.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div style="padding: 2rem; border: 1px solid rgba(201,168,76,0.2); background: rgba(201,168,76,0.03);">
                    <i class="bi bi-scissors" style="font-size: 2rem; color: var(--gold); display: block; margin-bottom: 1rem;"></i>
                    <div style="font-family: 'Cinzel', serif; font-size: 0.75rem; letter-spacing: 3px; color: var(--gold-dark); text-transform: uppercase; margin-bottom: 0.5rem;">Confección a Medida</div>
                    <p style="font-size: 0.8rem; color: rgba(10,10,10,0.6); line-height: 1.7;">Cada prenda es diseñada para moldear la perfección.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div style="padding: 2rem; border: 1px solid rgba(201,168,76,0.2); background: rgba(201,168,76,0.03);">
                    <i class="bi bi-award" style="font-size: 2rem; color: var(--gold); display: block; margin-bottom: 1rem;"></i>
                    <div style="font-family: 'Cinzel', serif; font-size: 0.75rem; letter-spacing: 3px; color: var(--gold-dark); text-transform: uppercase; margin-bottom: 0.5rem;">Herencia Estética</div>
                    <p style="font-size: 0.8rem; color: rgba(10,10,10,0.6); line-height: 1.7;">Inspirada en décadas de elegancia aristocrática revisitada.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- PRODUCTS --}}
<section class="oldmoney-section py-5">
    <div class="container py-4">

        <div class="row text-center mb-5">
            <div class="col">
                <p class="oldmoney-subtitle animate-fade-in-up">Selección Exclusiva</p>
                <h2 class="section-title animate-fade-in-up animate-delay-1" style="background: linear-gradient(135deg, var(--gold-dark), var(--gold), var(--gold-light)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                    La Colección
                </h2>
                <div class="section-line"></div>
            </div>
        </div>

        @php
            $oldMoneyItems = [
                ['img' => 'https://i.pinimg.com/1200x/ab/93/c9/ab93c9467a43c074d8485984954007cd.jpg', 'name' => 'Heritage Blazer', 'price' => '$489.000', 'tag' => 'Signature'],
                ['img' => 'https://i.pinimg.com/736x/c1/ab/8f/c1ab8f4c6d72911661d420fb8ddca753.jpg', 'name' => 'Silk Dress Shirt', 'price' => '$319.000', 'tag' => 'Clásico'],
                ['img' => 'https://i.pinimg.com/1200x/b5/31/91/b531916ff9dbbaac4bcfc3caa92126b6.jpg', 'name' => 'Oxford Overcoat', 'price' => '$659.000', 'tag' => 'Premium'],
                ['img' => 'https://i.pinimg.com/1200x/b0/b3/67/b0b36797bc476c1cb410c923f87d5f5a.jpg', 'name' => 'Linen Trousers', 'price' => '$249.000', 'tag' => 'Nuevo'],
                ['img' => 'https://i.pinimg.com/736x/4b/8c/cf/4b8ccf06459125bf75acc3e2c81396e5.jpg', 'name' => 'Cashmere Turtleneck', 'price' => '$389.000', 'tag' => 'Signature'],
                ['img' => 'https://i.pinimg.com/736x/e3/a5/6f/e3a56f3b2554db23e885fd3aa7718719.jpg', 'name' => 'Classic Chinos', 'price' => '$219.000', 'tag' => 'Clásico'],
                ['img' => 'https://i.pinimg.com/736x/8f/42/db/8f42dbcf88302460af866d4187e36089.jpg', 'name' => 'Polo Heritage', 'price' => '$199.000', 'tag' => 'Nuevo'],
                ['img' => 'https://i.pinimg.com/736x/5e/50/50/5e5050cfb97b511349c1cb6b65f86f7a.jpg', 'name' => 'Derby Shoes', 'price' => '$549.000', 'tag' => 'Premium'],
            ];
        @endphp

        <div class="row g-3">
            @foreach($oldMoneyItems as $item)
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product-card oldmoney-card">
                    <span class="product-badge">{{ $item['tag'] }}</span>
                    <img src="{{ $item['img'] }}" alt="{{ $item['name'] }}">
                    <div class="product-card-overlay" style="background: rgba(255,255,255,0.9);">
                        <div class="product-price">{{ $item['price'] }}</div>
                        <div class="product-name" style="color: var(--deep-black);">{{ $item['name'] }}</div>
                        <a href="#" class="btn-sinner-gold mt-2" style="padding: 0.5rem 1.5rem; font-size: 0.62rem;">Ver Pieza</a>
                    </div>
                    <div class="product-info" style="background: var(--pure-white);">
                        <h5 style="color: var(--deep-black);">{{ $item['name'] }}</h5>
                        <span class="price">{{ $item['price'] }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- BRAND QUOTE --}}
<section class="py-5 text-center" style="background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 50%, var(--gold) 100%); color: var(--pure-black);">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <i class="bi bi-quote" style="font-size: 3rem; color: rgba(10,10,10,0.2);"></i>
                <blockquote style="font-family: 'Cinzel', serif; font-size: clamp(1rem, 2.5vw, 1.4rem); letter-spacing: 2px; font-style: italic; color: var(--deep-black); line-height: 1.6;">
                    "El verdadero lujo no se ostenta. Se percibe."
                </blockquote>
                <p class="mt-3" style="font-family: 'Cinzel', serif; font-size: 0.65rem; letter-spacing: 4px; color: rgba(10,10,10,0.5);">— SINNER OLD MONEY PHILOSOPHY</p>
            </div>
        </div>
    </div>
</section>

@endsection
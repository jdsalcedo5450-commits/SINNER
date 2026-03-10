@extends('layouts.app')

@section('title', 'Catálogo General — SINNER')

@section('content')

{{-- Hero --}}
<section class="catalog-hero">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-lg-8">
                <p class="section-subtitle animate-fade-in-up">Todo en un lugar</p>
                <h1 class="section-title text-gradient-gold animate-fade-in-up animate-delay-1">Catálogo General</h1>
                <div class="section-line"></div>
                <p class="animate-fade-in-up animate-delay-2" style="color: rgba(245,240,232,0.6); font-size: 0.9rem; letter-spacing: 1px; max-width: 500px; margin: 0 auto;">
                    Explora toda nuestra colección: desde la elegancia del Old Money hasta la rebeldía del Streetwear.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Filter + Products --}}
<section style="background: var(--deep-black); padding: 4rem 0;">
    <div class="container">

        {{-- Filters --}}
        <div class="catalog-filter text-center">
            <button class="filter-btn active">Todos</button>
            <button class="filter-btn">Old Money</button>
            <button class="filter-btn">Streetwear</button>
            <button class="filter-btn">Camisas</button>
            <button class="filter-btn">Pantalones</button>
            <button class="filter-btn">Accesorios</button>
            <button class="filter-btn">Calzado</button>
        </div>

        {{-- Sort bar --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <span style="font-family: 'Cinzel', serif; font-size: 0.65rem; letter-spacing: 2px; color: var(--gold-dark);">
                MOSTRANDO 12 PRODUCTOS
            </span>
            <select class="form-control-sinner" style="width: auto; font-size: 0.72rem; padding: 0.5rem 1rem;">
                <option>Ordenar: Relevancia</option>
                <option>Precio: Menor a Mayor</option>
                <option>Precio: Mayor a Menor</option>
                <option>Más Recientes</option>
            </select>
        </div>

        {{-- Products Grid --}}
        @php
            $products = [
                ['img' => 'https://images.unsplash.com/photo-1594938298603-c8148c4b4057?w=600', 'name' => 'Classic Blazer', 'price' => '$289.000', 'badge' => 'Old Money'],
                ['img' => 'https://images.unsplash.com/photo-1512327428394-b99f62e16f1f?w=600', 'name' => 'Urban Hoodie', 'price' => '$179.000', 'badge' => 'Streetwear'],
                ['img' => 'https://images.unsplash.com/photo-1516257984-b1b4d707412e?w=600', 'name' => 'Silk Shirt', 'price' => '$219.000', 'badge' => 'Old Money'],
                ['img' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=600', 'name' => 'Drop Sneakers', 'price' => '$349.000', 'badge' => 'Limitado'],
                ['img' => 'https://images.unsplash.com/photo-1551232864-3f0890e580d9?w=600', 'name' => 'Oxford Coat', 'price' => '$459.000', 'badge' => 'Old Money'],
                ['img' => 'https://images.unsplash.com/photo-1523398002811-999ca8dec234?w=600', 'name' => 'Street Cap', 'price' => '$89.000', 'badge' => 'Streetwear'],
                ['img' => 'https://images.unsplash.com/photo-1617127365659-c47fa864d8bc?w=600', 'name' => 'Linen Trousers', 'price' => '$199.000', 'badge' => 'Old Money'],
                ['img' => 'https://images.unsplash.com/photo-1571945153237-4929e783af4a?w=600', 'name' => 'Cargo Pants', 'price' => '$239.000', 'badge' => 'Streetwear'],
                ['img' => 'https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=600', 'name' => 'Cashmere Polo', 'price' => '$329.000', 'badge' => 'Nuevo'],
                ['img' => 'https://images.unsplash.com/photo-1509631179647-0177331693ae?w=600', 'name' => 'Bomber Jacket', 'price' => '$389.000', 'badge' => 'Streetwear'],
                ['img' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600', 'name' => 'Chino Classic', 'price' => '$189.000', 'badge' => 'Old Money'],
                ['img' => 'https://images.unsplash.com/photo-1605348532760-6753d2c43329?w=600', 'name' => 'Oversized Tee', 'price' => '$129.000', 'badge' => 'Streetwear'],
            ];
        @endphp

        <div class="row g-3">
            @foreach($products as $product)
            <div class="col-6 col-md-4 col-lg-3">
                <div class="product-card">
                    <span class="product-badge">{{ $product['badge'] }}</span>
                    <img src="{{ $product['img'] }}" alt="{{ $product['name'] }}">
                    <div class="product-card-overlay">
                        <div class="product-price">{{ $product['price'] }}</div>
                        <div class="product-name">{{ $product['name'] }}</div>
                        <a href="#" class="btn-sinner-gold mt-2" style="padding: 0.5rem 1.5rem; font-size: 0.62rem;">Agregar</a>
                    </div>
                    <div class="product-info">
                        <h5>{{ $product['name'] }}</h5>
                        <span class="price">{{ $product['price'] }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Pagination --}}
        <div class="d-flex justify-content-center mt-5">
            <nav>
                <ul class="pagination" style="gap: 0.3rem;">
                    <li class="page-item">
                        <a class="page-link" href="#" style="background: transparent; border: 1px solid rgba(201,168,76,0.3); color: var(--gold); border-radius: 0; font-family: 'Cinzel', serif; font-size: 0.7rem; letter-spacing: 1px;">&laquo;</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#" style="background: var(--gold); border-color: var(--gold); color: var(--pure-black); border-radius: 0; font-family: 'Cinzel', serif; font-size: 0.7rem;">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#" style="background: transparent; border: 1px solid rgba(201,168,76,0.3); color: var(--gold); border-radius: 0; font-family: 'Cinzel', serif; font-size: 0.7rem;">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#" style="background: transparent; border: 1px solid rgba(201,168,76,0.3); color: var(--gold); border-radius: 0; font-family: 'Cinzel', serif; font-size: 0.7rem;">&raquo;</a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
</section>

@endsection
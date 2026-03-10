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
                ['img' => 'https://i.pinimg.com/1200x/ab/93/c9/ab93c9467a43c074d8485984954007cd.jpg', 'name' => 'Classic Blazer', 'price' => '$289.000', 'badge' => 'Old Money'],
                ['img' => 'https://i.pinimg.com/736x/71/f5/fb/71f5fb2e33d993255f300eddee64d4c6.jpg', 'name' => 'Urban Hoodie', 'price' => '$179.000', 'badge' => 'Streetwear'],
                ['img' => 'https://i.pinimg.com/736x/c1/ab/8f/c1ab8f4c6d72911661d420fb8ddca753.jpg', 'name' => 'Silk Shirt', 'price' => '$219.000', 'badge' => 'Old Money'],
                ['img' => 'https://i.pinimg.com/736x/6a/23/98/6a2398df9a2c96baff240ee079d14f83.jpg', 'name' => 'Drop Sneakers', 'price' => '$349.000', 'badge' => 'Limitado'],
                ['img' => 'https://i.pinimg.com/1200x/b5/31/91/b531916ff9dbbaac4bcfc3caa92126b6.jpg', 'name' => 'Oxford Coat', 'price' => '$459.000', 'badge' => 'Old Money'],
                ['img' => 'https://i.pinimg.com/736x/da/88/d0/da88d0f8a194e38e289400f58e0cea53.jpg', 'name' => 'Street Cap', 'price' => '$89.000', 'badge' => 'Streetwear'],
                ['img' => 'https://i.pinimg.com/1200x/b0/b3/67/b0b36797bc476c1cb410c923f87d5f5a.jpg', 'name' => 'Linen Trousers', 'price' => '$199.000', 'badge' => 'Old Money'],
                ['img' => 'https://i.pinimg.com/1200x/ac/85/14/ac8514c5711a34ada8b914feb36bef61.jpg', 'name' => 'Cargo Pants', 'price' => '$239.000', 'badge' => 'Streetwear'],
                ['img' => 'https://i.pinimg.com/736x/8f/42/db/8f42dbcf88302460af866d4187e36089.jpg', 'name' => 'Cashmere Polo', 'price' => '$329.000', 'badge' => 'Nuevo'],
                ['img' => 'https://i.pinimg.com/736x/64/06/a3/6406a33fcec296e7cdcdd9fa5cadd4da.jpg', 'name' => 'Bomber Jacket', 'price' => '$389.000', 'badge' => 'Streetwear'],
                ['img' => 'https://i.pinimg.com/736x/e3/a5/6f/e3a56f3b2554db23e885fd3aa7718719.jpg', 'name' => 'Chino Classic', 'price' => '$189.000', 'badge' => 'Old Money'],
                ['img' => 'https://i.pinimg.com/736x/63/70/ed/6370ede8e3cf389bece3ef5eea1d3ff7.jpg', 'name' => 'Oversized Tee', 'price' => '$129.000', 'badge' => 'Streetwear'],
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
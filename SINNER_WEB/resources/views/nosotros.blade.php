@extends('layouts.app')

@section('title', 'Nosotros — SINNER')

@section('content')

{{-- HERO --}}
<section class="about-hero">
    <div class="container position-relative" style="z-index: 2; padding: 5rem 0;">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <p class="section-subtitle animate-fade-in-up">Quiénes somos</p>
                <h1 class="section-title text-gradient-gold animate-fade-in-up animate-delay-1">Nosotros</h1>
                <div class="section-line" style="margin: 1rem 0;"></div>
                <p class="animate-fade-in-up animate-delay-2" style="color: rgba(245,240,232,0.7); line-height: 1.9; font-size: 0.9rem;">
                    SINNER nació de una idea simple pero poderosa: la moda no debería tener fronteras.
                    No debería obligarte a elegir entre elegancia y rebeldía. Entre herencia y revolución.
                    Somos la marca que rompe ese paradigma.
                </p>
                <p class="animate-fade-in-up animate-delay-3 mt-3" style="color: rgba(245,240,232,0.6); line-height: 1.9; font-size: 0.9rem;">
                    Fundada con pasión por la moda auténtica, SINNER fusiona dos mundos que, 
                    en apariencia, no podrían coexistir. El resultado es algo completamente nuevo: 
                    una identidad que desafía las reglas.
                </p>
            </div>
            <div class="col-lg-5 offset-lg-1 mt-5 mt-lg-0">
                <div style="border: 1px solid var(--gold-dark); padding: 2rem; background: rgba(201,168,76,0.03);">
                    <div style="font-family: 'Cinzel Decorative', serif; font-size: 4rem; font-weight: 900; background: linear-gradient(135deg, var(--gold-light), var(--gold)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; line-height: 1; margin-bottom: 0.5rem;">2023</div>
                    <div style="font-family: 'Cinzel', serif; font-size: 0.65rem; letter-spacing: 3px; color: var(--gold-dark); text-transform: uppercase;">Año de Fundación</div>
                    <hr style="border-color: rgba(201,168,76,0.2); margin: 1.5rem 0;">
                    <div class="row text-center g-3">
                        <div class="col-4">
                            <div style="font-family: 'Cinzel Decorative', serif; font-size: 1.5rem; color: var(--gold);">500+</div>
                            <div style="font-family: 'Cinzel', serif; font-size: 0.58rem; letter-spacing: 2px; color: rgba(245,240,232,0.4);">CLIENTES</div>
                        </div>
                        <div class="col-4" style="border-left: 1px solid rgba(201,168,76,0.2); border-right: 1px solid rgba(201,168,76,0.2);">
                            <div style="font-family: 'Cinzel Decorative', serif; font-size: 1.5rem; color: var(--gold);">2</div>
                            <div style="font-family: 'Cinzel', serif; font-size: 0.58rem; letter-spacing: 2px; color: rgba(245,240,232,0.4);">LÍNEAS</div>
                        </div>
                        <div class="col-4">
                            <div style="font-family: 'Cinzel Decorative', serif; font-size: 1.5rem; color: var(--gold);">100%</div>
                            <div style="font-family: 'Cinzel', serif; font-size: 0.58rem; letter-spacing: 2px; color: rgba(245,240,232,0.4);">PASIÓN</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- MISSION / VISION --}}
<section class="about-section py-5">
    <div class="container py-4">
        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <div class="support-card">
                    <span class="support-icon"><i class="bi bi-eye"></i></span>
                    <div class="support-title">Nuestra Visión</div>
                    <p style="color: rgba(245,240,232,0.6); font-size: 0.85rem; line-height: 1.9;">
                        Ser la marca de referencia para quienes se niegan a seguir una sola corriente.
                        Un espacio donde la sofisticación y la autenticidad urbana conviven sin conflicto.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="support-card">
                    <span class="support-icon"><i class="bi bi-gem"></i></span>
                    <div class="support-title">Nuestra Misión</div>
                    <p style="color: rgba(245,240,232,0.6); font-size: 0.85rem; line-height: 1.9;">
                        Crear prendas que expresen identidad única. Cada hilo, cada corte, 
                        cada detalle está pensado para quienes saben que la moda es un idioma propio.
                    </p>
                </div>
            </div>
        </div>

        {{-- VIDEO SECTION --}}
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <div class="text-center mb-4">
                    <p class="section-subtitle">Inspírate</p>
                    <h2 class="section-title text-gradient-gold">El Mundo SINNER</h2>
                    <div class="section-line"></div>
                    <p style="color: rgba(245,240,232,0.5); font-size: 0.85rem; margin-top: 0.5rem;">
                        La moda que nos mueve. El estilo que nos define.
                    </p>
                </div>

                <div class="video-container" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                    <iframe
                        src="https://www.youtube.com/watch?v=VmfQmaP-UQY"
                        title="SINNER Fashion — Old Money"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none;">
                    </iframe>
                </div>
                <p class="text-center mt-3" style="font-family: 'Cinzel', serif; font-size: 0.62rem; letter-spacing: 3px; color: var(--gold-dark);">FASHION INSPIRATION — OLD MONEY & STREETWEAR</p>
            </div>
        </div>

        {{-- SECOND VIDEO --}}
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <div class="video-container" style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                    <iframe
                        src="https://www.youtube.com/watch?v=-YzrXpqupps"
                        title="Streetwear Culture"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none;">
                    </iframe>
                </div>
                <p class="text-center mt-3" style="font-family: 'Cinzel', serif; font-size: 0.62rem; letter-spacing: 3px; color: var(--gold-dark);">STREETWEAR CULTURE — THE MOVEMENT</p>
            </div>
        </div>

        {{-- TEAM --}}
        <div class="row text-center mb-5">
            <div class="col">
                <p class="section-subtitle">Detrás de SINNER</p>
                <h2 class="section-title text-gradient-gold">Nuestro Equipo</h2>
                <div class="section-line"></div>
            </div>
        </div>

        <div class="row justify-content-center g-4 mb-5">
            <div class="col-md-5 col-lg-4">
                <div class="team-card">
                    <div class="team-avatar d-flex align-items-center justify-content-center mx-auto mb-3" style="background: linear-gradient(135deg, var(--gold-dark), var(--gold)); font-family: 'Cinzel Decorative', serif; font-size: 2rem; color: var(--pure-black);">
                        DS
                    </div>
                    <div class="team-name mb-1">Daniel Salcedo</div>
                    <div class="team-role mb-3">Co-Fundador & Director Creativo</div>
                    <hr style="border-color: rgba(201,168,76,0.2);">
                    <p style="font-size: 0.8rem; color: rgba(245,240,232,0.55); line-height: 1.8;">
                        Visionario de moda con pasión por la estética atemporal y la cultura urbana.
                        Responsable de la identidad visual de SINNER.
                    </p>
                    <div class="mt-3">
                        <a href="#" class="social-icon" style="width: 30px; height: 30px; font-size: 0.8rem;"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-icon" style="width: 30px; height: 30px; font-size: 0.8rem;"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-lg-4">
                <div class="team-card">
                    <div class="team-avatar d-flex align-items-center justify-content-center mx-auto mb-3" style="background: linear-gradient(135deg, var(--gold-dark), var(--gold)); font-family: 'Cinzel Decorative', serif; font-size: 2rem; color: var(--pure-black);">
                        AT
                    </div>
                    <div class="team-name mb-1">Andres Tulcan</div>
                    <div class="team-role mb-3">Co-Fundador & Director de Marca</div>
                    <hr style="border-color: rgba(201,168,76,0.2);">
                    <p style="font-size: 0.8rem; color: rgba(245,240,232,0.55); line-height: 1.8;">
                        Estratega de marca con profundo conocimiento de la moda streetwear y
                        la cultura del lujo contemporáneo. Motor de expansión de SINNER.
                    </p>
                    <div class="mt-3">
                        <a href="#" class="social-icon" style="width: 30px; height: 30px; font-size: 0.8rem;"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-icon" style="width: 30px; height: 30px; font-size: 0.8rem;"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>

        {{-- VALUES --}}
        <div class="row g-3">
            <div class="col-12">
                <div class="text-center mb-4">
                    <h3 class="section-title text-gradient-gold" style="font-size: 1.5rem;">Nuestros Valores</h3>
                    <div class="section-line"></div>
                </div>
            </div>
            @foreach([
                ['icon' => 'bi-lightning', 'title' => 'Audacia', 'desc' => 'Nos atrevemos donde otros dudan. La mediocridad no es una opción.'],
                ['icon' => 'bi-gem', 'title' => 'Calidad', 'desc' => 'Cada detalle importa. Cada costura cuenta. Sin compromisos.'],
                ['icon' => 'bi-person-check', 'title' => 'Autenticidad', 'desc' => 'Somos reales. Sin poses, sin máscaras. Solo moda genuina.'],
                ['icon' => 'bi-arrow-up-right-circle', 'title' => 'Evolución', 'desc' => 'La moda avanza. Nosotros la lideramos, no la seguimos.'],
            ] as $val)
            <div class="col-sm-6 col-lg-3">
                <div class="feature-box h-100">
                    <div class="feature-icon"><i class="bi {{ $val['icon'] }}"></i></div>
                    <div class="feature-text mb-2">{{ $val['title'] }}</div>
                    <p style="font-size: 0.78rem; color: rgba(245,240,232,0.5); line-height: 1.7; margin: 0;">{{ $val['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
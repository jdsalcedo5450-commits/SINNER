@extends('layouts.app')

@section('title', 'Soporte — SINNER')

@section('content')

{{-- HERO --}}
<section class="support-hero">
    <div class="container py-5">
        <div class="row text-center justify-content-center">
            <div class="col-lg-7">
                <p class="section-subtitle animate-fade-in-up">Estamos aquí</p>
                <h1 class="section-title text-gradient-gold animate-fade-in-up animate-delay-1">Soporte</h1>
                <div class="section-line"></div>
                <p class="animate-fade-in-up animate-delay-2" style="color: rgba(245,240,232,0.6); font-size: 0.9rem; letter-spacing: 1px; max-width: 500px; margin: 0 auto;">
                    Nuestro equipo está disponible para ayudarte. Queremos que tu experiencia SINNER sea impecable.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- CONTACT OPTIONS --}}
<section style="background: var(--deep-black); padding: 5rem 0;">
    <div class="container">

        {{-- Cards --}}
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="support-card text-center">
                    <span class="support-icon"><i class="bi bi-whatsapp"></i></span>
                    <div class="support-title">WhatsApp</div>
                    <p style="color: rgba(245,240,232,0.6); font-size: 0.82rem; line-height: 1.8; margin-bottom: 1.5rem;">
                        Respuesta inmediata.<br>Lun - Sáb: 8am - 8pm
                    </p>
                    <a href="https://wa.me/573001234567" target="_blank" class="btn-sinner-gold" style="font-size: 0.65rem; padding: 0.7rem 1.8rem;">
                        Chatear Ahora
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="support-card text-center">
                    <span class="support-icon"><i class="bi bi-envelope-open"></i></span>
                    <div class="support-title">Email</div>
                    <p style="color: rgba(245,240,232,0.6); font-size: 0.82rem; line-height: 1.8; margin-bottom: 1.5rem;">
                        contacto@sinner.com<br>Respuesta en 24h
                    </p>
                    <a href="mailto:contacto@sinner.com" class="btn-sinner-gold" style="font-size: 0.65rem; padding: 0.7rem 1.8rem;">
                        Enviar Email
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="support-card text-center">
                    <span class="support-icon"><i class="bi bi-instagram"></i></span>
                    <div class="support-title">Instagram</div>
                    <p style="color: rgba(245,240,232,0.6); font-size: 0.82rem; line-height: 1.8; margin-bottom: 1.5rem;">
                        @sinner.official<br>DM abiertos 24/7
                    </p>
                    <a href="#" target="_blank" class="btn-sinner-gold" style="font-size: 0.65rem; padding: 0.7rem 1.8rem;">
                        Seguirnos
                    </a>
                </div>
            </div>
        </div>

        {{-- Contact Form + FAQ --}}
        <div class="row g-5">

            {{-- ===== FORMULARIO PQRS ===== --}}
            <div class="col-lg-6">
                <div style="background: var(--gray-dark); border: 1px solid rgba(201,168,76,0.15); padding: 2.5rem;">

                    <h3 class="section-title text-gradient-gold mb-1" style="font-size: 1.2rem;">Envía tu PQRS</h3>
                    <p class="section-subtitle mb-4">Te respondemos a la brevedad</p>

                    {{-- Alerta de éxito --}}
                    @if(session('success'))
                        <div class="alert-sinner-success mb-4">
                            <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                        </div>
                    @endif

                    {{-- Errores de validación --}}
                    @if($errors->any())
                        <div class="alert-sinner-error mb-4">
                            <i class="bi bi-exclamation-triangle me-2"></i>
                            <strong>Por favor corrige los siguientes errores:</strong>
                            <ul style="margin: 0.5rem 0 0 1rem; font-size: 0.8rem;">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('pqrs.store') }}" method="POST" novalidate>
                        @csrf

                        {{-- Fila: Nombres + Apellidos --}}
                        <div class="row g-3 mb-3">
                            <div class="col-6">
                                <label class="form-label-sinner">Nombres <span style="color: var(--red-sinner);">*</span></label>
                                <input
                                    type="text"
                                    name="nombres"
                                    class="form-control form-control-sinner @error('nombres') is-invalid-sinner @enderror"
                                    placeholder="Tus nombres"
                                    value="{{ old('nombres') }}"
                                    required>
                                @error('nombres')
                                    <div class="field-error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label class="form-label-sinner">Apellidos <span style="color: var(--red-sinner);">*</span></label>
                                <input
                                    type="text"
                                    name="apellidos"
                                    class="form-control form-control-sinner @error('apellidos') is-invalid-sinner @enderror"
                                    placeholder="Tus apellidos"
                                    value="{{ old('apellidos') }}"
                                    required>
                                @error('apellidos')
                                    <div class="field-error">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="mb-3">
                            <label class="form-label-sinner">Email <span style="color: var(--red-sinner);">*</span></label>
                            <input
                                type="email"
                                name="email"
                                class="form-control form-control-sinner @error('email') is-invalid-sinner @enderror"
                                placeholder="tu@email.com"
                                value="{{ old('email') }}"
                                required>
                            @error('email')
                                <div class="field-error">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Fila: Rol + Tipo PQRS --}}
                        <div class="row g-3 mb-3">
                            <div class="col-6">
                                <label class="form-label-sinner">Rol <span style="color: var(--red-sinner);">*</span></label>
                                <select name="rol" class="form-control form-control-sinner @error('rol') is-invalid-sinner @enderror" required>
                                    <option value="" disabled {{ old('rol') ? '' : 'selected' }}>Selecciona</option>
                                    <option value="cliente"  {{ old('rol') === 'cliente'  ? 'selected' : '' }}>Cliente</option>
                                    <option value="empleado" {{ old('rol') === 'empleado' ? 'selected' : '' }}>Empleado</option>
                                    <option value="socio"    {{ old('rol') === 'socio'    ? 'selected' : '' }}>Socio</option>
                                </select>
                                @error('rol')
                                    <div class="field-error">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label class="form-label-sinner">Tipo de PQRS <span style="color: var(--red-sinner);">*</span></label>
                                <select name="tipo" class="form-control form-control-sinner @error('tipo') is-invalid-sinner @enderror" required>
                                    <option value="" disabled {{ old('tipo') ? '' : 'selected' }}>Selecciona</option>
                                    <option value="queja"         {{ old('tipo') === 'queja'         ? 'selected' : '' }}>Queja</option>
                                    <option value="recomendacion" {{ old('tipo') === 'recomendacion' ? 'selected' : '' }}>Recomendación</option>
                                    <option value="felicitacion"  {{ old('tipo') === 'felicitacion'  ? 'selected' : '' }}>Felicitación</option>
                                </select>
                                @error('tipo')
                                    <div class="field-error">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- Mensaje --}}
                        <div class="mb-4">
                            <label class="form-label-sinner">Mensaje <span style="color: var(--red-sinner);">*</span></label>
                            <textarea
                                name="mensaje"
                                class="form-control form-control-sinner @error('mensaje') is-invalid-sinner @enderror"
                                rows="5"
                                placeholder="Describe detalladamente tu queja, recomendación o felicitación..."
                                required>{{ old('mensaje') }}</textarea>
                            @error('mensaje')
                                <div class="field-error">{{ $message }}</div>
                            @enderror
                            <div style="text-align: right; font-size: 0.68rem; color: rgba(245,240,232,0.3); margin-top: 0.3rem; font-family: 'Cinzel', serif; letter-spacing: 1px;">
                                Máx. 2000 caracteres
                            </div>
                        </div>

                        <button type="submit" class="btn-sinner-gold w-100" style="text-align: center; cursor: pointer; border: none;">
                            Enviar PQRS &nbsp;<i class="bi bi-arrow-right"></i>
                        </button>

                    </form>
                </div>
            </div>

            {{-- FAQ --}}
            <div class="col-lg-6">
                <h3 class="section-title text-gradient-gold mb-1" style="font-size: 1.2rem;">Preguntas Frecuentes</h3>
                <p class="section-subtitle mb-4">Respuestas rápidas</p>

                <div class="accordion accordion-sinner" id="faqAccordion">

                    <div class="accordion-item" style="background: transparent; border: none; margin-bottom: 0.5rem;">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                ¿Cuánto tarda el envío?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Los envíos dentro de Colombia toman entre 2 a 5 días hábiles según la ciudad. Ciudades principales (Bogotá, Medellín, Cali) 1-2 días. Zonas rurales hasta 7 días.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" style="background: transparent; border: none; margin-bottom: 0.5rem;">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                ¿Puedo hacer cambios o devoluciones?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Sí. Tienes 30 días calendario desde la recepción para solicitar cambio o devolución. La prenda debe estar sin uso, con etiquetas originales y en su empaque original.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" style="background: transparent; border: none; margin-bottom: 0.5rem;">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                ¿Cómo sé mi talla?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Cada producto tiene una guía de tallas en su descripción. Para asistencia personalizada, escríbenos por WhatsApp con tus medidas (pecho, cintura, cadera, largo de pierna) y te recomendamos la talla ideal.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" style="background: transparent; border: none; margin-bottom: 0.5rem;">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                ¿Qué métodos de pago aceptan?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Aceptamos tarjetas de crédito y débito (Visa, Mastercard, Amex), PSE, Nequi, Daviplata, y efectivo a través de Efecty y Baloto en toda Colombia.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" style="background: transparent; border: none; margin-bottom: 0.5rem;">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                                ¿Hacen envíos internacionales?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Actualmente operamos solo en Colombia. Estamos trabajando para expandirnos a toda Latinoamérica próximamente. ¡Síguenos para enterarte primero!
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item" style="background: transparent; border: none; margin-bottom: 0.5rem;">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                                ¿Tienen tienda física?
                            </button>
                        </h2>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Por ahora somos 100% digital. Esto nos permite ofrecerte los mejores precios sin intermediarios. Planeamos abrir nuestra primera tienda en Bogotá próximamente.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

{{-- BOTTOM BANNER --}}
<section class="py-4 text-center" style="background: var(--pure-black); border-top: 1px solid rgba(201,168,76,0.1);">
    <div class="container">
        <div class="row justify-content-center align-items-center g-3">
            <div class="col-auto">
                <span style="font-family: 'Cinzel', serif; font-size: 0.65rem; letter-spacing: 3px; color: var(--gold-dark);">SÍGUENOS</span>
            </div>
            <div class="col-auto">
                <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                <a href="#" class="social-icon"><i class="bi bi-tiktok"></i></a>
                <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                <a href="#" class="social-icon"><i class="bi bi-pinterest"></i></a>
            </div>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
/* Alertas estilo SINNER */
.alert-sinner-success {
    background: rgba(201,168,76,0.1);
    border: 1px solid rgba(201,168,76,0.4);
    color: var(--gold-light);
    padding: 1rem 1.2rem;
    font-family: 'Raleway', sans-serif;
    font-size: 0.82rem;
    letter-spacing: 0.5px;
}
.alert-sinner-error {
    background: rgba(196,30,58,0.1);
    border: 1px solid rgba(196,30,58,0.4);
    color: #ff8fa3;
    padding: 1rem 1.2rem;
    font-family: 'Raleway', sans-serif;
    font-size: 0.82rem;
    letter-spacing: 0.5px;
}
.is-invalid-sinner {
    border-color: var(--red-sinner) !important;
    box-shadow: 0 0 10px rgba(196,30,58,0.2) !important;
}
.field-error {
    font-family: 'Raleway', sans-serif;
    font-size: 0.72rem;
    color: #ff8fa3;
    margin-top: 0.3rem;
    letter-spacing: 0.5px;
}
/* Selects en dark mode */
select.form-control-sinner option {
    background: var(--gray-dark);
    color: var(--off-white);
}
</style>
@endpush
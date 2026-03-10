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

            {{-- Form --}}
            <div class="col-lg-6">
                <div style="background: var(--gray-dark); border: 1px solid rgba(201,168,76,0.15); padding: 2.5rem;">
                    <h3 class="section-title text-gradient-gold mb-1" style="font-size: 1.2rem;">Escríbenos</h3>
                    <p class="section-subtitle mb-4">Te respondemos a la brevedad</p>

                    <div class="mb-3">
                        <label class="form-label-sinner">Nombre completo</label>
                        <input type="text" class="form-control form-control-sinner" placeholder="Tu nombre">
                    </div>
                    <div class="mb-3">
                        <label class="form-label-sinner">Email</label>
                        <input type="email" class="form-control form-control-sinner" placeholder="tu@email.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label-sinner">Asunto</label>
                        <select class="form-control form-control-sinner">
                            <option value="">Selecciona un asunto</option>
                            <option>Pedido / Seguimiento</option>
                            <option>Devolución / Cambio</option>
                            <option>Información de producto</option>
                            <option>Colaboración</option>
                            <option>Otro</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="form-label-sinner">Mensaje</label>
                        <textarea class="form-control form-control-sinner" rows="5" placeholder="Cuéntanos en qué podemos ayudarte..."></textarea>
                    </div>
                    <button type="button" class="btn-sinner-gold w-100" style="text-align: center; cursor: pointer; border: none;">
                        Enviar Mensaje <i class="bi bi-arrow-right ms-2"></i>
                    </button>
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
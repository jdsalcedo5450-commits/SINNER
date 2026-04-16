@extends('layouts.app')

@section('title', 'Mensajes & PQRS — SINNER')

@section('content')

{{-- HERO --}}
<section style="background: linear-gradient(135deg, var(--pure-black) 0%, var(--deep-black) 60%, rgba(201,168,76,0.05) 100%); padding: 5rem 0 3rem; border-bottom: 1px solid rgba(201,168,76,0.15);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <p class="section-subtitle animate-fade-in-up">Panel Administrativo</p>
                <h1 class="section-title text-gradient-gold animate-fade-in-up animate-delay-1">Mensajes</h1>
                <div class="section-line" style="margin-left: 0;"></div>
                <p class="animate-fade-in-up animate-delay-2" style="color: rgba(245,240,232,0.55); font-size: 0.85rem; letter-spacing: 1px; max-width: 460px; margin-top: 0.5rem;">
                    Gestiona todas las PQRS recibidas desde el portal de soporte SINNER.
                </p>
            </div>
            <div class="col-lg-6 text-lg-end mt-4 mt-lg-0 animate-fade-in-up animate-delay-2">
                <a href="{{ route('soporte') }}" class="btn-sinner-gold" style="font-size: 0.65rem; padding: 0.7rem 1.8rem;">
                    <i class="bi bi-arrow-left me-2"></i>Volver al Soporte
                </a>
            </div>
        </div>
    </div>
</section>

{{-- STATS CARDS --}}
<section style="background: var(--pure-black); padding: 2.5rem 0; border-bottom: 1px solid rgba(201,168,76,0.1);">
    <div class="container">
        <div class="row g-3">

            <div class="col-6 col-md-3">
                <div class="stats-card-sinner text-center">
                    <div class="stats-number text-gradient-gold">{{ $totalPqrs }}</div>
                    <div class="stats-label">Total PQRS</div>
                    <i class="bi bi-inbox stats-icon"></i>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="stats-card-sinner text-center" style="border-color: rgba(196,30,58,0.3);">
                    <div class="stats-number" style="color: var(--red-sinner);">{{ $noLeidos }}</div>
                    <div class="stats-label">Sin Leer</div>
                    <i class="bi bi-envelope stats-icon" style="color: var(--red-sinner);"></i>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="stats-card-sinner text-center" style="border-color: rgba(196,30,58,0.25);">
                    <div class="stats-number" style="background: linear-gradient(135deg,#ff6b6b,var(--red-sinner)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">{{ $quejas }}</div>
                    <div class="stats-label">Quejas</div>
                    <i class="bi bi-exclamation-circle stats-icon" style="color: var(--red-sinner);"></i>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="stats-card-sinner text-center" style="border-color: rgba(40,200,100,0.25);">
                    <div class="stats-number" style="color: #4ade80;">{{ $felicitaciones }}</div>
                    <div class="stats-label">Felicitaciones</div>
                    <i class="bi bi-star stats-icon" style="color: #4ade80;"></i>
                </div>
            </div>

        </div>
    </div>
</section>

<section style="background: var(--deep-black); padding: 2rem 0; border-bottom: 1px solid rgba(201,168,76,0.1);">
    <div class="container">
        <form method="GET" action="{{ route('mensajes.index') }}">
            <div class="row g-3 align-items-end">

                <div class="col-md-3">
                    <label class="form-label-sinner">Buscar</label>
                    <input type="text" name="buscar" class="form-control form-control-sinner"
                           placeholder="Nombre o email..." value="{{ request('buscar') }}">
                </div>

                <div class="col-md-2">
                    <label class="form-label-sinner">Tipo</label>
                    <select name="tipo" class="form-control form-control-sinner">
                        <option value="">Todos</option>
                        <option value="queja"         {{ request('tipo') === 'queja'         ? 'selected' : '' }}>Queja</option>
                        <option value="recomendacion" {{ request('tipo') === 'recomendacion' ? 'selected' : '' }}>Recomendación</option>
                        <option value="felicitacion"  {{ request('tipo') === 'felicitacion'  ? 'selected' : '' }}>Felicitación</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <label class="form-label-sinner">Rol</label>
                    <select name="rol" class="form-control form-control-sinner">
                        <option value="">Todos</option>
                        <option value="cliente"  {{ request('rol') === 'cliente'  ? 'selected' : '' }}>Cliente</option>
                        <option value="empleado" {{ request('rol') === 'empleado' ? 'selected' : '' }}>Empleado</option>
                        <option value="socio"    {{ request('rol') === 'socio'    ? 'selected' : '' }}>Socio</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <label class="form-label-sinner">Estado</label>
                    <select name="estado" class="form-control form-control-sinner">
                        <option value="">Todos</option>
                        <option value="pendiente"   {{ request('estado') === 'pendiente'   ? 'selected' : '' }}>Pendiente</option>
                        <option value="en_revision" {{ request('estado') === 'en_revision' ? 'selected' : '' }}>En Revisión</option>
                        <option value="resuelto"    {{ request('estado') === 'resuelto'    ? 'selected' : '' }}>Resuelto</option>
                    </select>
                </div>

                <div class="col-md-3 d-flex gap-2">
                    <button type="submit" class="btn-sinner-gold" style="font-size: 0.62rem; padding: 0.72rem 1.2rem; flex: 1;">
                        <i class="bi bi-search me-1"></i> Filtrar
                    </button>
                    <a href="{{ route('mensajes.index') }}" class="btn-sinner-red" style="font-size: 0.62rem; padding: 0.72rem 1rem;">
                        <i class="bi bi-x-lg"></i>
                    </a>
                </div>

            </div>
        </form>
    </div>
</section>

{{-- TABLE --}}
<section style="background: var(--deep-black); padding: 3rem 0 5rem;">
    <div class="container">

        @if(session('success'))
            <div class="alert-sinner-success mb-4 animate-fade-in-up">
                <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
            </div>
        @endif

        @if($pqrs->isEmpty())
            <div class="text-center py-5">
                <i class="bi bi-inbox" style="font-size: 4rem; color: rgba(201,168,76,0.2);"></i>
                <p style="font-family: 'Cinzel', serif; font-size: 0.75rem; letter-spacing: 3px; color: rgba(245,240,232,0.3); margin-top: 1rem;">
                    NO HAY PQRS REGISTRADAS
                </p>
            </div>
        @else

        <div class="d-flex justify-content-between align-items-center mb-3">
            <span style="font-family: 'Cinzel', serif; font-size: 0.62rem; letter-spacing: 2px; color: var(--gold-dark);">
                MOSTRANDO {{ $pqrs->firstItem() }}–{{ $pqrs->lastItem() }} DE {{ $pqrs->total() }} REGISTROS
            </span>
        </div>

        {{-- Tabla --}}
        <div class="table-sinner-wrapper">
            <table class="table-sinner">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Remitente</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Tipo</th>
                        <th>Mensaje</th>
                        <th>Estado</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pqrs as $item)
                    <tr class="{{ !$item->leido ? 'row-unread' : '' }}">

                        {{-- ID --}}
                        <td>
                            <span style="font-family: 'Cinzel', serif; font-size: 0.68rem; color: var(--gold-dark);">
                                #{{ $item->id }}
                            </span>
                            @if(!$item->leido)
                                <span class="badge-unread ms-1">●</span>
                            @endif
                        </td>

                        {{-- Nombre --}}
                        <td>
                            <div style="font-family: 'Cinzel', serif; font-size: 0.72rem; letter-spacing: 1px; color: var(--off-white);">
                                {{ $item->nombres }}
                            </div>
                            <div style="font-size: 0.7rem; color: rgba(245,240,232,0.45);">{{ $item->apellidos }}</div>
                        </td>

                        {{-- Email --}}
                        <td>
                            <a href="mailto:{{ $item->email }}" style="color: var(--gold); font-size: 0.75rem; text-decoration: none; letter-spacing: 0.5px;">
                                {{ $item->email }}
                            </a>
                        </td>

                        {{-- Rol --}}
                        <td>
                            <span class="badge-sinner badge-rol-{{ $item->rol }}">
                                {{ ucfirst($item->rol) }}
                            </span>
                        </td>

                        {{-- Tipo --}}
                        <td>
                            <span class="badge-sinner badge-tipo-{{ $item->tipo }}">
                                @switch($item->tipo)
                                    @case('queja')         <i class="bi bi-exclamation-circle me-1"></i>Queja @break
                                    @case('recomendacion') <i class="bi bi-lightbulb me-1"></i>Recomendación @break
                                    @case('felicitacion')  <i class="bi bi-star me-1"></i>Felicitación @break
                                @endswitch
                            </span>
                        </td>

                        <td>
                            <span class="mensaje-preview" data-id="{{ $item->id }}">
                                {{ Str::limit($item->mensaje, 55) }}
                            </span>
                            @if(strlen($item->mensaje) > 55)
                                <button class="btn-ver-mas" data-bs-toggle="modal" data-bs-target="#modalMensaje{{ $item->id }}">
                                    ver más
                                </button>
                            @endif
                        </td>

                        <td>
                            <form action="{{ route('mensajes.estado', $item->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('PUT')
                                <select name="estado" class="select-estado select-estado-{{ $item->estado }}"
                                        onchange="this.form.submit()">
                                    <option value="pendiente"   {{ $item->estado === 'pendiente'   ? 'selected' : '' }}>Pendiente</option>
                                    <option value="en_revision" {{ $item->estado === 'en_revision' ? 'selected' : '' }}>En Revisión</option>
                                    <option value="resuelto"    {{ $item->estado === 'resuelto'    ? 'selected' : '' }}>Resuelto</option>
                                </select>
                            </form>
                        </td>

                        {{-- Fecha --}}
                        <td>
                            <div style="font-size: 0.72rem; color: rgba(245,240,232,0.5);">
                                {{ $item->created_at->format('d/m/Y') }}
                            </div>
                            <div style="font-size: 0.65rem; color: rgba(245,240,232,0.3);">
                                {{ $item->created_at->format('H:i') }}
                            </div>
                        </td>

                        {{-- Acciones --}}
                        <td>
                            <div class="d-flex gap-1">

                                {{-- Marcar como leído --}}
                                @if(!$item->leido)
                                <form action="{{ route('pqrs.leido', $item->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="action-btn action-btn-gold" title="Marcar como leído">
                                        <i class="bi bi-envelope-open"></i>
                                    </button>
                                </form>
                                @endif

                                {{-- Eliminar --}}
                                <form action="{{ route('mensajes.destroy', $item->id) }}" method="POST"
                                      onsubmit="return confirm('¿Eliminar esta PQRS? Esta acción no se puede deshacer.');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="action-btn action-btn-red" title="Eliminar">
                                        <i class="bi bi-trash3"></i>
                                    </button>
                                </form>

                            </div>
                        </td>

                    </tr>

                    {{-- Modal mensaje completo --}}
                    <div class="modal fade" id="modalMensaje{{ $item->id }}" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered modal-sinner">
                            <div class="modal-content modal-content-sinner">
                                <div class="modal-header modal-header-sinner">
                                    <div>
                                        <span class="badge-sinner badge-tipo-{{ $item->tipo }} me-2">
                                            {{ ucfirst($item->tipo) }}
                                        </span>
                                        <span style="font-family: 'Cinzel', serif; font-size: 0.72rem; letter-spacing: 2px; color: var(--gold);">
                                            {{ $item->nombre_completo }}
                                        </span>
                                    </div>
                                    <button type="button" class="btn-close-sinner" data-bs-dismiss="modal">
                                        <i class="bi bi-x-lg"></i>
                                    </button>
                                </div>
                                <div class="modal-body modal-body-sinner">
                                    <div class="modal-meta mb-3">
                                        <span><i class="bi bi-envelope me-1" style="color: var(--gold);"></i>{{ $item->email }}</span>
                                        <span class="ms-3"><i class="bi bi-person me-1" style="color: var(--gold);"></i>{{ ucfirst($item->rol) }}</span>
                                        <span class="ms-3"><i class="bi bi-calendar3 me-1" style="color: var(--gold);"></i>{{ $item->created_at->format('d/m/Y H:i') }}</span>
                                    </div>
                                    <div class="modal-message-box">
                                        {{ $item->mensaje }}
                                    </div>
                                </div>
                                <div class="modal-footer modal-footer-sinner">
                                    <button type="button" class="btn-sinner-gold" style="font-size: 0.62rem; padding: 0.6rem 1.5rem;" data-bs-dismiss="modal">
                                        Cerrar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </tbody>
            </table>
        </div>

        @if($pqrs->hasPages())
        <div class="d-flex justify-content-center mt-5">
            <nav>
                <ul class="pagination mb-0" style="gap: 0.3rem;">

                    {{-- Prev --}}
                    @if($pqrs->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link-sinner page-link-disabled">&laquo;</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link-sinner" href="{{ $pqrs->previousPageUrl() }}">&laquo;</a>
                        </li>
                    @endif

                    {{-- Números --}}
                    @foreach($pqrs->getUrlRange(1, $pqrs->lastPage()) as $page => $url)
                        <li class="page-item {{ $page == $pqrs->currentPage() ? 'active' : '' }}">
                            <a class="page-link-sinner {{ $page == $pqrs->currentPage() ? 'page-link-active' : '' }}"
                               href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach

                    {{-- Next --}}
                    @if($pqrs->hasMorePages())
                        <li class="page-item">
                            <a class="page-link-sinner" href="{{ $pqrs->nextPageUrl() }}">&raquo;</a>
                        </li>
                    @else
                        <li class="page-item disabled">
                            <span class="page-link-sinner page-link-disabled">&raquo;</span>
                        </li>
                    @endif

                </ul>
            </nav>
        </div>
        @endif

        @endif
    </div>
</section>

@endsection

@push('styles')
<style>
/* ===== STATS CARDS ===== */
.stats-card-sinner {
    background: var(--gray-dark);
    border: 1px solid rgba(201,168,76,0.2);
    padding: 1.8rem 1rem;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
}
.stats-card-sinner:hover { border-color: var(--gold); transform: translateY(-3px); }
.stats-number {
    font-family: 'Cinzel Decorative', serif;
    font-size: 2.2rem;
    font-weight: 900;
    line-height: 1;
    margin-bottom: 0.3rem;
}
.stats-label {
    font-family: 'Cinzel', serif;
    font-size: 0.6rem;
    letter-spacing: 3px;
    color: rgba(245,240,232,0.4);
    text-transform: uppercase;
}
.stats-icon {
    position: absolute;
    bottom: 0.8rem;
    right: 1rem;
    font-size: 2.5rem;
    color: rgba(201,168,76,0.06);
}

/* ===== TABLE ===== */
.table-sinner-wrapper {
    overflow-x: auto;
    border: 1px solid rgba(201,168,76,0.15);
}
.table-sinner {
    width: 100%;
    border-collapse: collapse;
    font-family: 'Raleway', sans-serif;
}
.table-sinner thead tr {
    background: var(--pure-black);
    border-bottom: 1px solid rgba(201,168,76,0.3);
}
.table-sinner thead th {
    font-family: 'Cinzel', serif;
    font-size: 0.6rem;
    letter-spacing: 3px;
    color: var(--gold-dark);
    text-transform: uppercase;
    padding: 1rem 1.2rem;
    white-space: nowrap;
    font-weight: 600;
}
.table-sinner tbody tr {
    border-bottom: 1px solid rgba(201,168,76,0.07);
    transition: background 0.2s ease;
}
.table-sinner tbody tr:hover {
    background: rgba(201,168,76,0.04);
}
.table-sinner tbody tr.row-unread {
    background: rgba(201,168,76,0.03);
    border-left: 2px solid var(--gold-dark);
}
.table-sinner td {
    padding: 1rem 1.2rem;
    font-size: 0.8rem;
    vertical-align: middle;
    color: rgba(245,240,232,0.75);
}

/* ===== BADGES ===== */
.badge-sinner {
    font-family: 'Cinzel', serif;
    font-size: 0.58rem;
    letter-spacing: 1.5px;
    padding: 0.3rem 0.7rem;
    text-transform: uppercase;
    display: inline-block;
    white-space: nowrap;
}
/* Tipo */
.badge-tipo-queja         { background: rgba(196,30,58,0.15); border: 1px solid rgba(196,30,58,0.4); color: #ff8fa3; }
.badge-tipo-recomendacion { background: rgba(201,168,76,0.12); border: 1px solid rgba(201,168,76,0.35); color: var(--gold-light); }
.badge-tipo-felicitacion  { background: rgba(74,222,128,0.1); border: 1px solid rgba(74,222,128,0.3); color: #86efac; }
/* Rol */
.badge-rol-cliente  { background: rgba(96,165,250,0.1); border: 1px solid rgba(96,165,250,0.3); color: #93c5fd; }
.badge-rol-empleado { background: rgba(167,139,250,0.1); border: 1px solid rgba(167,139,250,0.3); color: #c4b5fd; }
.badge-rol-socio    { background: rgba(201,168,76,0.12); border: 1px solid rgba(201,168,76,0.3); color: var(--gold-light); }

/* No leído dot */
.badge-unread { color: var(--red-sinner); font-size: 0.6rem; }

/* ===== MENSAJE PREVIEW ===== */
.mensaje-preview {
    font-size: 0.78rem;
    color: rgba(245,240,232,0.55);
    max-width: 240px;
    display: inline;
}
.btn-ver-mas {
    background: none;
    border: none;
    color: var(--gold);
    font-family: 'Cinzel', serif;
    font-size: 0.6rem;
    letter-spacing: 1px;
    cursor: pointer;
    text-decoration: underline;
    padding: 0 0.3rem;
}

/* ===== SELECT ESTADO ===== */
.select-estado {
    background: transparent;
    border: 1px solid rgba(201,168,76,0.25);
    color: var(--off-white);
    font-family: 'Cinzel', serif;
    font-size: 0.62rem;
    letter-spacing: 1px;
    padding: 0.3rem 0.5rem;
    cursor: pointer;
    outline: none;
    transition: border-color 0.2s ease;
}
.select-estado:focus { border-color: var(--gold); }
.select-estado-pendiente   { border-color: rgba(201,168,76,0.3); color: var(--gold-light); }
.select-estado-en_revision { border-color: rgba(96,165,250,0.3); color: #93c5fd; }
.select-estado-resuelto    { border-color: rgba(74,222,128,0.3); color: #86efac; }
.select-estado option { background: var(--gray-dark); color: var(--off-white); }

/* ===== ACTION BUTTONS ===== */
.action-btn {
    width: 30px;
    height: 30px;
    border: 1px solid;
    background: transparent;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 0.8rem;
    cursor: pointer;
    transition: all 0.2s ease;
    text-decoration: none;
}
.action-btn-gold { border-color: rgba(201,168,76,0.4); color: var(--gold); }
.action-btn-gold:hover { background: var(--gold); color: var(--pure-black); }
.action-btn-red  { border-color: rgba(196,30,58,0.4); color: var(--red-sinner); }
.action-btn-red:hover  { background: var(--red-sinner); color: white; }

/* ===== MODAL ===== */
.modal-sinner { max-width: 600px; }
.modal-content-sinner {
    background: var(--gray-dark);
    border: 1px solid rgba(201,168,76,0.25);
    border-radius: 0;
}
.modal-header-sinner {
    background: var(--pure-black);
    border-bottom: 1px solid rgba(201,168,76,0.15);
    padding: 1.2rem 1.5rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.modal-body-sinner { padding: 1.8rem 1.5rem; }
.modal-footer-sinner {
    background: var(--pure-black);
    border-top: 1px solid rgba(201,168,76,0.1);
    padding: 1rem 1.5rem;
    display: flex;
    justify-content: flex-end;
}
.btn-close-sinner {
    background: none;
    border: 1px solid rgba(201,168,76,0.25);
    color: rgba(245,240,232,0.5);
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    font-size: 0.75rem;
    transition: all 0.2s ease;
}
.btn-close-sinner:hover { border-color: var(--red-sinner); color: var(--red-sinner); }
.modal-meta {
    font-size: 0.75rem;
    color: rgba(245,240,232,0.5);
    letter-spacing: 0.5px;
    padding-bottom: 1rem;
    border-bottom: 1px solid rgba(201,168,76,0.1);
}
.modal-message-box {
    background: rgba(0,0,0,0.3);
    border: 1px solid rgba(201,168,76,0.1);
    padding: 1.3rem;
    margin-top: 1rem;
    font-size: 0.85rem;
    color: rgba(245,240,232,0.8);
    line-height: 1.8;
    letter-spacing: 0.3px;
}

/* ===== PAGINATION ===== */
.page-link-sinner {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    background: transparent;
    border: 1px solid rgba(201,168,76,0.3);
    color: var(--gold);
    font-family: 'Cinzel', serif;
    font-size: 0.7rem;
    text-decoration: none;
    transition: all 0.2s ease;
}
.page-link-sinner:hover { background: rgba(201,168,76,0.1); color: var(--gold); }
.page-link-active { background: var(--gold) !important; color: var(--pure-black) !important; border-color: var(--gold) !important; }
.page-link-disabled { opacity: 0.3; cursor: not-allowed; color: var(--gold); display: inline-flex; align-items: center; justify-content: center; width: 36px; height: 36px; border: 1px solid rgba(201,168,76,0.15); font-family: 'Cinzel', serif; font-size: 0.7rem; }

/* ===== ALERTS ===== */
.alert-sinner-success {
    background: rgba(201,168,76,0.1);
    border: 1px solid rgba(201,168,76,0.4);
    color: var(--gold-light);
    padding: 1rem 1.2rem;
    font-family: 'Raleway', sans-serif;
    font-size: 0.82rem;
    letter-spacing: 0.5px;
}

/* Selects filtros dark */
select.form-control-sinner option { background: var(--gray-dark); color: var(--off-white); }
</style>
@endpush
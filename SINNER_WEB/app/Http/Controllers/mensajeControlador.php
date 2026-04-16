<?php

namespace App\Http\Controllers;

use App\Models\Pqrs;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class MensajeControlador extends Controller
{

    public function index(Request $request): View
    {
        $query = Pqrs::query()->latest();

        if ($request->filled('tipo')) {
            $query->where('tipo', $request->tipo);
        }

        if ($request->filled('rol')) {
            $query->where('rol', $request->rol);
        }

        if ($request->filled('estado')) {
            $query->where('estado', $request->estado);
        }

        if ($request->filled('buscar')) {
            $buscar = $request->buscar;
            $query->where(function ($q) use ($buscar) {
                $q->where('nombres',   'LIKE', "%{$buscar}%")
                  ->orWhere('apellidos', 'LIKE', "%{$buscar}%")
                  ->orWhere('email',     'LIKE', "%{$buscar}%");
            });
        }

        $pqrs         = $query->paginate(10)->withQueryString();
        $totalPqrs    = Pqrs::count();
        $noLeidos     = Pqrs::where('leido', false)->count();
        $quejas       = Pqrs::where('tipo', 'queja')->count();
        $felicitaciones = Pqrs::where('tipo', 'felicitacion')->count();

        return view('mensajes', compact(
            'pqrs',
            'totalPqrs',
            'noLeidos',
            'quejas',
            'felicitaciones'
        ));
    }

    public function create(): View
    {
        return view('mensajes');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nombres'   => ['required', 'string', 'max:100'],
            'apellidos' => ['required', 'string', 'max:100'],
            'email'     => ['required', 'email', 'max:150'],
            'rol'       => ['required', 'in:cliente,empleado,socio'],
            'tipo'      => ['required', 'in:queja,recomendacion,felicitacion'],
            'mensaje'   => ['required', 'string', 'min:10'],
            'estado'    => ['sometimes', 'in:pendiente,en_revision,resuelto'],
        ]);

        Pqrs::create($validated);

        return redirect()->route('mensajes.index')
                         ->with('success', 'PQRS creada correctamente.');
    }

    public function update(Request $request, Pqrs $pqrs): RedirectResponse
    {
        $validated = $request->validate([
            'estado' => ['required', 'in:pendiente,en_revision,resuelto'],
            'leido'  => ['sometimes', 'boolean'],
        ]);

        $pqrs->update($validated);

        return redirect()->route('mensajes.index')
                         ->with('success', 'Estado actualizado correctamente.');
    }

    public function destroy(Pqrs $pqrs): RedirectResponse
    {
        $pqrs->delete();

        return redirect()->route('mensajes.index')
                         ->with('success', 'PQRS eliminada correctamente.');
    }

    public function cambiarEstado(Request $request, Pqrs $pqrs): RedirectResponse
    {
        $request->validate([
            'estado' => ['required', 'in:pendiente,en_revision,resuelto'],
        ]);

        $pqrs->update(['estado' => $request->estado, 'leido' => true]);

        return back()->with('success', 'Estado actualizado.');
    }
}
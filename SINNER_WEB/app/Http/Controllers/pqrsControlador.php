<?php

namespace App\Http\Controllers;

use App\Models\Pqrs;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PqrsControlador extends Controller
{
    public function soporte(): View
    {
        return view('soporte');
    }

    public function create(): View
    {
        return view('soporte');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nombres'   => ['required', 'string', 'max:100'],
            'apellidos' => ['required', 'string', 'max:100'],
            'email'     => ['required', 'email', 'max:150'],
            'rol'       => ['required', 'in:cliente,empleado,socio'],
            'tipo'      => ['required', 'in:queja,recomendacion,felicitacion'],
            'mensaje'   => ['required', 'string', 'min:10', 'max:2000'],
        ], [
            'nombres.required'   => 'Por favor ingresa tu nombre.',
            'apellidos.required' => 'Por favor ingresa tus apellidos.',
            'email.required'     => 'Por favor ingresa tu correo electrónico.',
            'email.email'        => 'El correo ingresado no es válido.',
            'rol.required'       => 'Selecciona tu rol.',
            'rol.in'             => 'El rol seleccionado no es válido.',
            'tipo.required'      => 'Selecciona el tipo de PQRS.',
            'tipo.in'            => 'El tipo de PQRS no es válido.',
            'mensaje.required'   => 'Por favor escribe tu mensaje.',
            'mensaje.min'        => 'El mensaje debe tener al menos 10 caracteres.',
        ]);

        Pqrs::create($validated);

        return redirect()
            ->route('soporte')
            ->with('success', '¡Tu mensaje ha sido enviado exitosamente! Nos pondremos en contacto pronto.');
    }

    public function edit(Pqrs $pqrs): View
    {
        return view('mensajes.edit', compact('pqrs'));
    }

    public function update(Request $request, Pqrs $pqrs): RedirectResponse
    {
        $validated = $request->validate([
            'nombres'   => ['sometimes', 'string', 'max:100'],
            'apellidos' => ['sometimes', 'string', 'max:100'],
            'email'     => ['sometimes', 'email', 'max:150'],
            'rol'       => ['sometimes', 'in:cliente,empleado,socio'],
            'tipo'      => ['sometimes', 'in:queja,recomendacion,felicitacion'],
            'mensaje'   => ['sometimes', 'string', 'min:10', 'max:2000'],
            'estado'    => ['sometimes', 'in:pendiente,en_revision,resuelto'],
            'leido'     => ['sometimes', 'boolean'],
        ]);

        $pqrs->update($validated);

        return redirect()
            ->route('mensajes.index')
            ->with('success', 'PQRS actualizada correctamente.');
    }

    public function destroy(Pqrs $pqrs): RedirectResponse
    {
        $pqrs->delete();

        return redirect()
            ->route('mensajes.index')
            ->with('success', 'PQRS eliminada correctamente.');
    }

    public function marcarLeido(Pqrs $pqrs): RedirectResponse
    {
        $pqrs->update(['leido' => true]);

        return back()->with('success', 'PQRS marcada como leída.');
    }
}
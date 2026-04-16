<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pqrs extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pqrs';

    protected $fillable = [
        'nombres',
        'apellidos',
        'email',
        'rol',
        'tipo',
        'mensaje',
        'estado',
        'leido',
    ];

    protected $casts = [
        'leido'      => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function scopeNoLeidos($query)
    {
        return $query->where('leido', false);
    }

    public function scopePorTipo($query, string $tipo)
    {
        return $query->where('tipo', $tipo);
    }

    public function scopePorRol($query, string $rol)
    {
        return $query->where('rol', $rol);
    }

    public function getNombreCompletoAttribute(): string
    {
        return "{$this->nombres} {$this->apellidos}";
    }

    public function getTipoBadgeColorAttribute(): string
    {
        return match ($this->tipo) {
            'queja'          => 'danger',
            'recomendacion'  => 'warning',
            'felicitacion'   => 'success',
            default          => 'secondary',
        };
    }

    public function getRolBadgeColorAttribute(): string
    {
        return match ($this->rol) {
            'cliente'  => 'info',
            'empleado' => 'primary',
            'socio'    => 'warning',
            default    => 'secondary',
        };
    }
}
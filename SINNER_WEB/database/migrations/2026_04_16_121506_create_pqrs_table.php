<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pqrs', function (Blueprint $table) {
            $table->id();

            $table->string('nombres',   100);
            $table->string('apellidos', 100);
            $table->string('email',     150)->index();

            $table->enum('rol',  ['cliente', 'empleado', 'socio']);
            $table->enum('tipo', ['queja', 'recomendacion', 'felicitacion']);

            $table->text('mensaje');

            $table->enum('estado', ['pendiente', 'en_revision', 'resuelto'])
                  ->default('pendiente');

            $table->boolean('leido')->default(false);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pqrs');
    }
};
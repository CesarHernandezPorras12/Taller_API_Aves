<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('aves', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('color');
            $table->string('tamano');
            $table->float('peso');
            $table->float('tamano_pico');
            $table->float('tamano_alas');
            $table->string('tipo');
            $table->enum('horario_caza', ['diurno', 'nocturno']);
            $table->integer('esperanza_vida'); 
            $table->string('habitat'); 
            $table->boolean('vuela'); 
            $table->boolean('cantante'); 
            $table->string('region'); 
            $table->text('descripcion'); 
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aves');
    }
};

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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('year');
            $table->string('category');
            $table->text('description'); // Resumen para la card
            $table->json('stack'); // ['Laravel', 'Vue']
            $table->string('color')->default('#6A0DAD');
            $table->string('hero_image')->nullable();
            $table->json('blocks'); // La magia: Contenido dinámico
            $table->boolean('featured')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};

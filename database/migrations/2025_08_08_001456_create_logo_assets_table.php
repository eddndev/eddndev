<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('logo_assets', function (Blueprint $table) {
            $table->id();
            $table->string('original_path')->unique();   // ej: resources/images/brand/logo.png
            $table->string('title')->nullable();
            $table->string('alt')->nullable();
            $table->string('collection')->default('default'); // colección de Media Library
            $table->json('meta')->nullable();            // extras opcionales
            $table->timestamps();
            // $table->softDeletes(); // opcional
        });
    }
    public function down(): void {
        Schema::dropIfExists('logo_assets');
    }
};

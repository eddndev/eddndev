<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('full_assets', function (Blueprint $table) {
            $table->id();
            $table->string('original_path')->unique();   // ej: resources/images/covers/landing-hq.jpg
            $table->string('title')->nullable();
            $table->string('alt')->nullable();
            $table->string('collection')->default('default');
            $table->json('meta')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('full_assets');
    }
};

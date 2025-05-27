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
        Schema::create('services', function (Blueprint $table) {
        $table->id();
        $table->string('name');               // Nom du service (ex: Pose Acrylique)
        $table->string('description')->nullable();
        $table->integer('duration');          // Durée en minutes (ex: 120 pour 2h)
        $table->decimal('price_long', 8, 2)->nullable();
        $table->decimal('price_medium', 8, 2)->nullable();
        $table->decimal('price_short', 8, 2)->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};

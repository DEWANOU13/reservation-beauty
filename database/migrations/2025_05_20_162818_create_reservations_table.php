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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('client_email');
            $table->foreignId('service_id')->constrained()->onDelete('cascade');
            $table->enum('nail_length', ['long', 'medium', 'short']);
            $table->dateTime('reserved_at');  // Date et heure de la réservation
            $table->string('options')->nullable();
            $table->string('client_phone')->nullable();
            $table->decimal('price', 8, 2);
            $table->string('payment_method')->nullable(); // Méthode de paiement (ex: carte, espèces)

             // Options comme Nail Art simple/extra
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};

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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');              // Nazwa firmy
            $table->string('nip', 10)->unique(); // NIP (10 cyfr, unikalny)
            $table->string('postal_code', 6);    // Kod pocztowy (np. 00-000)
            $table->string('city');              // Miasto
            $table->string('address');           // Ulica i nr
            $table->string('phone')->nullable(); // Numer telefonu (opcjonalny)
            $table->string('email')->unique();   // Email/login
            $table->decimal('ratio', 5, 2)->default(0.50); // Przelicznik zł -> punkty
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};

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
        Schema::create('revisions', function (Blueprint $table) {
            $table->id();
            $table->string("user_name");
            $table->string("user_email");
            $table->string("brand");
            $table->string("model");
            $table->string("serial_key");
            $table->string("tel_number");
            $table->enum("service_interval", ["50", "100", "200", "altro"]);
            $table->enum('status', ['Inviata', 'Accettata', 'Rifiutata', 'Presa in carico', 'In Lavorazione', 'Completata'])->default('Inviata');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('revisions');
    }
};

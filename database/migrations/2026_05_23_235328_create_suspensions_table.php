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
        Schema::create('suspensions', function (Blueprint $table) {
            $table->id();
            $table->foreignId("category_id")->constrained()->onDelete("cascade");
            $table->string("brand");
            $table->string("name");
            $table->decimal("price");
            $table->string("size"); //Misura
            $table->string("wheel"); //Ruota
            $table->string("material");
            $table->string("color");
            $table->string("brakes"); //Freni
            $table->text("description");
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suspensions');
    }
};

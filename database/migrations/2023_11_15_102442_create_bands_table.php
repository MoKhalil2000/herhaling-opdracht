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
        Schema::create('bands', function (Blueprint $table) {
            $table->id(); // id (primary key, auto-increment)
            $table->string('name');
            $table->string('genre');
            $table->unsignedSmallInteger('founded')->length(4);
            $table->string('active_till')->default('Heden');
            $table->timestamps(); // created_at and updated_at columns
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bands');
    }
};

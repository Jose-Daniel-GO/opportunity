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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->char('sex', 1);
            // $table->integer('area_id', 11);
            $table->unsignedBigInteger('area_id'); // Usamos unsignedBigInteger para claves foráneas
            $table->foreign('area_id')->default(1)->references('id')->on('areas')->onDelete('cascade'); // Añadí 'onDelete' para permitir la eliminación en cascada
            $table->string('boletin', 11); 
            $table->text('description'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};

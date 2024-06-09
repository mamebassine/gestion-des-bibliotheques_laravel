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
       
Schema::create('rayons', function (Blueprint $table) {
    $table->id(); // Crée une colonne 'id' comme clé primaire auto-incrémentée
    $table->string('libelle'); 
    $table->string('partie'); 
    $table->timestamps(); 
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rayons');
    }
};

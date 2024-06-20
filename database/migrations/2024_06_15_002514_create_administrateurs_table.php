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
        Schema::create('administrateurs', function (Blueprint $table) {
          
                $table->id(); // Clé primaire auto-incrémentée
                $table->string('nom', 90); // Champ nom, maximum 90 caractères
                $table->string('prenom', 90)->nullable()->change();
                $table->string('adresse', 255); // Champ adresse, maximum 255 caractères
                $table->string('email', 255)->unique(); // Champ email, maximum 255 caractères, doit être unique
                $table->string('password', 255); // Augmenter la longueur maximale à 255 caractères
                $table->rememberToken();
                $table->timestamps(); // Champs created_at et updated_at
            });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrateurs');
    }
};

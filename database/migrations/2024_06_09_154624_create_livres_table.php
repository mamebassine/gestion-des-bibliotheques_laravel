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
        Schema::create('livres', function (Blueprint $table) {
            $table->id(); 
            $table->string('titre'); 
            $table->string('image')->nullable(); 
            $table->date('date_de_publication'); 
            $table->integer('nombre_de_page'); 
            $table->string('auteur'); 
            $table->string('isbn')->unique(); 
            $table->string('editeur'); 
            $table->unsignedBigInteger('id_rayon'); // Crée une colonne 'id_rayon' comme clé étrangère
            $table->unsignedBigInteger('id_categorie'); // Crée une colonne 'id_categorie' comme clé étrangère
            $table->unsignedBigInteger('id_utilisateur')->nullable(); // Crée une colonne 'id_utilisateur' comme clé étrangère, peut être null
            $table->timestamps(); // Crée les colonnes 'created_at' et 'updated_at'
        
            // Définition des clés étrangères
            $table->foreign('id_rayon')->references('id')->on('rayons')->onUpdate('cascade')->onDelete('cascade'); // Clé étrangère vers 'rayons' avec cascade sur update et delete
            $table->foreign('id_categorie')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade'); // Clé étrangère vers 'categories' avec cascade sur update et delete
            $table->foreign('id_utilisateur')->references('id')->on('utilisateurs')->onUpdate('cascade')->onDelete('set null'); // Clé étrangère vers 'utilisateurs' avec cascade sur update et set null sur delete
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livres');
    }
};

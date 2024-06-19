<?php

// app/Models/Livre.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre', 'image', 'date_de_publication', 'nombre_de_page', 'auteur', 'isbn', 'editeur', 'id_rayon', 'id_categorie',
    ];

    // Relationships
    public function rayon()
    {
        return $this->belongsTo(Rayon::class, 'id_rayon');
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'id_categorie');
    }
}


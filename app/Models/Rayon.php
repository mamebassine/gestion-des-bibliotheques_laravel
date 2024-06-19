<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
    protected $fillable = ['libelle', 'partie'];
    public function livres()
    {
        return $this->hasMany(Livre::class, 'id_rayon');
    }
}





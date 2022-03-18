<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    use HasFactory;

    protected $table = "otelo_chambre";
    protected $fillable = [
        'nbCouchage', 'porte', 'etage', 'categorie_id', 'baignoire', 'prixBase'
    ];

    public function categorie()
    {
        return $this->belongsTo('App\Models\Categorie');
    }

}

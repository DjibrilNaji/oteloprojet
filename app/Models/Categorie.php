<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $table = "otelo_categorie";
    protected $fillable = [
        'categorie_id','libelle'
    ];

    public function chambres(){
        return $this->hasMany('App\Models\Chambre');
      }
}

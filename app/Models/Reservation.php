<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = "otelo_reservation";
    protected $fillable = [
        'dateD', 'dateF', 'idPeriode', 'idChambre'
    ];
}

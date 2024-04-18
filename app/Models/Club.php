<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    public function eleves(){
        return $this->hasMany(Eleve::class);
    }
}


/**
 * Eleve(id, nom, prenom)
 * Club(id, nom)
 * Activite(id, description, dateDebut, nombreJours)
 *
 * |Eleve |*---->1|Club|
 * |Eleve |*--->*|Activite|
 */

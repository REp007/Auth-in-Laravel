<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    use HasFactory;

    public function eleves(){
        return $this->belongsToMany(Eleve::class, 'activite_eleve',
        'activite_id', 'eleve_id')
        ->withTimestamps()
        ->as('activite_eleve');
    }
}

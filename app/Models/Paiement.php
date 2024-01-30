<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    protected $fillable = [
        'numero', 'frais_ecolage', 'montant_paye', 'montant_total', 'eleve_id',
    ];

    public function eleve(){
        return $this->belongsTo(Eleves::class);
    }
}

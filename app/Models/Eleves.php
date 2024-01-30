<?php

namespace App\Models;

use App\Models\Classe;
use App\Models\Employe;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleves extends Model
{
    protected $fillable=[
        'matricule', 'nom', 'prenom', 'date_naissance', 'lieu_naissance', 'adresse', 'telephone',
        'sexe', 'email', 'nationalite', 'classe_id', 'employe_id', 'photo',
    ];

    public function classe() {
        return $this->belongsTo(Classe::class);
    }

    public function employe() {
        return $this->belongsTo(Employe::class);
    }

    public function paiements(){
        return $this->hasMany(Paiement::class);
    }
}

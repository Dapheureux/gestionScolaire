<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $fillable = [
        'nom', 'prenom',
    ];

    public function eleves(){
        return $this->hasMany(Eleves::class);
    }
}

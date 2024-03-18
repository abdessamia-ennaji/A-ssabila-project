<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamationv extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function chauffeur(){
        return $this->hasMany(Chauffeur::class);
    }
}

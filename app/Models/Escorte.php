<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escorte extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomEsc',
        'prenomEsc',
        'CIN',
        
    ];

    public function chauffeur()
    {
        return $this->belongsTo(Chauffeur::class);
    }
}


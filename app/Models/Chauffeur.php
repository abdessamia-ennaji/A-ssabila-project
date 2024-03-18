<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chauffeur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomChfr',
        'prenomChfr',
        'CIN',
        
    ];

    public function transport()
    {
        return $this->belongsTo(Transport::class);
    }
}

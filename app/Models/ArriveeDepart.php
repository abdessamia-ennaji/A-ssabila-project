<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArriveeDepart extends Model
{
    use HasFactory;
    protected $guarded = [];
    

    public function arriveedepart(){
        return $this->hasMany(ArriveeDepart::class ,'arriveedepart');
    }
}

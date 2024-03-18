<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kilometrage extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function transport(){
        return $this->hasMany(Transport::class);
    }
}

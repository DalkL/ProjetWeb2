<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatutVoiture extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'nom_en'
    ];
}
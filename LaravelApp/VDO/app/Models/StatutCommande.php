<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatutCommande extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'nom_en'
    ];
}
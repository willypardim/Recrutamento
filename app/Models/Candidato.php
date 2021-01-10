<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory;

    protected $casts = [
        'competencias' => 'array'
    ];

    protected $fillable = [
        'nome', 
        'email',
        'idade',
        'linkedin',
        'competencias'
    ];
}

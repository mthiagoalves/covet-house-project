<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    // Campos que podem ser preenchidos em massa
    protected $fillable = [
        'name',
        'slug',
        'has_video',
        'subtitle',
        'description',
        'website',
        'website_text',
        'socials',
    ];

    // O "Pulo do Gato": Transforma os tipos de dados automaticamente
    protected $casts = [
        'has_video' => 'boolean',
        'socials' => 'array', // Converte a string JSON do banco direto para Array PHP
    ];
}

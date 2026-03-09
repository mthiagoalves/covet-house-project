<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogueAndEbooks extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'type',
        'slug',
        'external_link',
        'is_featured',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
    ];
}

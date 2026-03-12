<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finish extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'visible',
    ];

    protected $casts = [
        'visible'     => 'boolean',
    ];

    /**
     * Relação com Produtos (Muitos para Muitos)
     */
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}

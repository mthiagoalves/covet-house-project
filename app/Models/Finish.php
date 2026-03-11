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
        'is_standard',
        'visible',
    ];

    protected $casts = [
        'is_standard' => 'boolean',
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

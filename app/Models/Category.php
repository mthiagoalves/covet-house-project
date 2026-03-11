<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    /**
     * Relação com Subcategorias.
     * Uma categoria "tem muitas" (hasMany) subcategorias.
     */
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    /**
     * Relação com Produtos.
     * Uma categoria "tem muitos" (hasMany) produtos.
     */
    public function products()
    {
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }
}

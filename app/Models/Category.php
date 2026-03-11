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
        // Quando criarmos o model Subcategory, essa relação vai funcionar magicamente
        return $this->hasMany(Subcategory::class);
    }

    /**
     * Relação com Produtos.
     * Uma categoria "tem muitos" (hasMany) produtos.
     */
    // public function products()
    // {
    //     // Se os produtos forem ligados diretamente à categoria principal:
    //     return $this->hasMany(Product::class);

    //     // Dica PRO: Se os produtos forem ligados APENAS à subcategoria,
    //     // você usará o "hasManyThrough" (Tem muitos através de...) no futuro:
    //     // return $this->hasManyThrough(Product::class, Subcategory::class);
    // }
}

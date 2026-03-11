<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
    ];

    /**
     * Relação de volta com a Categoria.
     * Uma subcategoria "pertence a" (belongsTo) uma Categoria.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Relação com os Produtos.
     * Uma subcategoria "tem muitos" (hasMany) produtos.
     */
    // public function products()
    // {
    //     // Quando criarmos a tabela de produtos, essa relação será ativada
    //     return $this->hasMany(Product::class);
    // }
}

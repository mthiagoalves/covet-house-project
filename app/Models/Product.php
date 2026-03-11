<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_id',
        'category_id',
        'subcategory_id',
        'type',
        'name',
        'slug',
        'description',
        'dimensions_cm',
        'dimensions_in',
        'materials_and_finishes',
        'visible_in_all_products',
        'is_new',
        'has_stock',
        'is_best_seller',
    ];

    protected $casts = [
        'is_new'         => 'boolean',
        'has_stock'      => 'boolean',
        'is_best_seller' => 'boolean',
        'dimensions_cm'  => 'array',
        'dimensions_in'  => 'array',
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function finishes()
    {
        return $this->belongsToMany(Finish::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ambiance extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'is_active'];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Relação com os produtos presentes neste ambiente.
     * O withPivot() é crucial para trazer as posições do hotspot.
     */
    public function products()
    {
        return $this->belongsToMany(Product::class)
            ->withPivot('top', 'left')
            ->withTimestamps();
    }
}

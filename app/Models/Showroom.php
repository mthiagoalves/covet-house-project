<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Showroom extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'title_form',
        'location',
        'cover_image',
        'description',
        'address',
        'email',
        'phone',
    ];
}

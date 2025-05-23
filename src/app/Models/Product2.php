<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product2 extends Model
{
    protected $fillable = [
        'name',
        'price',
        'image_path',
        'season',
        'description',
    ];
    protected $casts = [
        'season' => 'array',
    ];
}

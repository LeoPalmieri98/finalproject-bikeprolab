<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suspension extends Model
{
    protected $fillable = [
        'category_id',
        'brand',
        'name',
        'price',
        'size',
        'wheel',
        'material',
        'color',
        'brakes',
        'description',
        'image'
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

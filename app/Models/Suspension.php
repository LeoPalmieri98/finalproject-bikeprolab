<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suspension extends Model
{


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function suspensions()
    {
        return $this->hasMany(Suspension::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Revision extends Model
{
    protected $fillable = [
        'user_name',
        'user_email',
        'brand',
        'model',
        'serial_key',
        'tel_number',
        'service_interval',
        'status'
    ];
}

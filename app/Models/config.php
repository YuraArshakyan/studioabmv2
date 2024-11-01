<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class config extends Model
{
    protected $fillable = [
        'key',
        'value'
    ];
}

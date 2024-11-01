<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    protected $fillable = [
        'header',
        'front_text',
        'main_text'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class submited_forms extends Model
{
    protected $fillable = [
        'Name',
        'Phone',
        'email',
        'Message',
        'form',
        'status',
        'sent_to_reserve_email'
    ];
}

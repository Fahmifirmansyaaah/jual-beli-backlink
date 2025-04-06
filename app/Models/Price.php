<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected  $fillable = ['name', 'harga', 'fitur'];
    protected $casts = [
        'fitur' => 'array',
    ];
}

<?php

namespace App\Yahp\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'description',
        'hall',
        'shelf',
        'side',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartiments extends Model
{
    use HasFactory;
    protected $fillable = [
        'apartiment_tittle',
        'image',
        'description',
        'price',
        'wifi',
        'apartiment_type'
    ];
}

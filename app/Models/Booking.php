<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'apartiment_id',
        'name',
        'email',
        'phone',
        'start_date',
        'end_date'
    ];
    public function apartiments()
    {
        return $this->hasOne('App\Models\apartiments','id','apartiment_id' );
    }
}
 
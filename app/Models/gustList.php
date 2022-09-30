<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gustList extends Model
{
    use HasFactory;
    protected $fillable = [

        'fullname',
        'phone',
        'knowus',
        'no_guests',
        'attending',
        'table',

    ];
}

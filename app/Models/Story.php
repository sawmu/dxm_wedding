<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;
    protected $fillable = [

        'SectionTitle',
        'image1',
        'title1',
        'date1',
        'dec1',
        'image2',
        'title2',
        'date2',
        'dec2',
        'image3',
        'title3',
        'date3',
        'dec3',
       

    ];
}

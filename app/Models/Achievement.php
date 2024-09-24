<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;

    protected $fillable = ['heading','achievement_images_details'];

    protected $casts =[ 'achievement_images_details' => 'array' ];
}

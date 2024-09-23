<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = ['heading','testimonial_images_details'];

    protected $casts =[ 'testimonial_images_details' => 'array' ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyersGuide extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'Years_of_experience',
        'amenities',
        'happy_clients',
        'house_sold',
        'home_loan_title',
        'home_loan_details',
        'tax_benefits_details',
        'nri_info_title',
        'nri_info_details',
    ];

    // Cast JSON fields to arrays or objects
    protected $casts = [
        'home_loan_details' => 'array', // Can be 'json' or 'array'
        'tax_benefits_details' => 'array',
        'nri_info_details' => 'array',
    ];
}

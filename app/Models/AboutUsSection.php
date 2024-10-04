<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'overview_title',
        'overview_description',
        'overview_description_2',
        'our_Mission_image',
        'our_Mission_description',
        'our_vision_description',
        'our_vision_image',
        'parallax_effect_image',
        'parallax_effect_heading',
         'meet_our_team_heading',
        'meet_our_team_details'
    ];

    protected $casts = [
        'our_Mission_image' => 'array',
         'our_vision_image' => 'array',
         'meet_our_team_details' => 'array'
        ];


    public function meetOurTeam()
    {
        return $this->hasMany(MeetOurTeam::class, 'AboutUsSectionId');
    }
}

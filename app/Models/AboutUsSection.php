<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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
        return $this->hasMany(meetOurTeam::class, 'AboutUsSectionId');
    }


    public function setAboutUsSectionOurMissionImageAttribute($value)
    {
        // Check if the model exists (i.e., this is an update)
        if ($this->exists && is_array($this->our_Mission_image)) {
            // Loop through the old images
            foreach ($this->our_Mission_image as $oldImage) {
                // If the old image is not in the new image array, delete it
                if (!in_array($oldImage, $value)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        }

        // Save the new image paths array (make sure it's an array)
        $this->attributes['our_Mission_image'] = json_encode($value);
    }


    public function setAboutUsSectionOurVisionImageAttribute($value)
    {
        // Check if the model exists (i.e., this is an update)
        if ($this->exists && is_array($this->our_vision_image)) {
            // Loop through the old images
            foreach ($this->our_vision_image as $oldImage) {
                // If the old image is not in the new image array, delete it
                if (!in_array($oldImage, $value)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        }

        // Save the new image paths array (make sure it's an array)
        $this->attributes['our_vision_image'] = json_encode($value);
    }


    public function setAboutUsSectionMeetOurTeamDetailsAttribute($value)
    {
        // Check if the model exists (i.e., this is an update)
        if ($this->exists && is_array($this->meet_our_team_details)) {
            // Loop through the old images
            foreach ($this->meet_our_team_details as $oldImage) {
                // If the old image is not in the new image array, delete it
                if (!in_array($oldImage, $value)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        }

        // Save the new image paths array (make sure it's an array)
        $this->attributes['meet_our_team_details'] = json_encode($value);
    }


    public function setParallaxEffectImageAttribute($value)
    {

         // Check if this is an update (i.e., the model already exists in the database)
         if ($this->exists && $this->parallax_effect_image && $value !== $this->parallax_effect_image) {
            // Delete the old image, making sure to include the correct path
            Storage::disk('public')->delete($this->parallax_effect_image);
        }

        // Save the new image path (only the filename is stored in the database)
        $this->attributes['parallax_effect_image'] = $value;
    }
}

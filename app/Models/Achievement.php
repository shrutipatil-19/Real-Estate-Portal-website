<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Achievement extends Model
{
    use HasFactory;

    protected $fillable = ['heading','achievement_images_details'];

    protected $casts =[ 'achievement_images_details' => 'array' ];


    public function setAchievementImagesDetailsAttribute($value)
    {
        // Check if the model exists (i.e., this is an update)
        if ($this->exists && is_array($this->achievement_images_details)) {
            // Loop through the old images
            foreach ($this->achievement_images_details as $oldImage) {
                // If the old image is not in the new image array, delete it
                if (!in_array($oldImage, $value)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        }

        // Save the new image paths array (make sure it's an array)
        $this->attributes['achievement_images_details'] = json_encode($value);
    }
}

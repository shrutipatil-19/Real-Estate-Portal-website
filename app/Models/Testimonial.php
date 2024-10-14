<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = ['heading','testimonial_images_details'];

    protected $casts =[ 'testimonial_images_details' => 'array' ];


    public function setTestimonialImagesDetailsAttribute($value)
    {
        // Check if the model exists (i.e., this is an update)
        if ($this->exists && is_array($this->testimonial_images_details)) {
            // Loop through the old images
            foreach ($this->testimonial_images_details as $oldImage) {
                // If the old image is not in the new image array, delete it
                if (!in_array($oldImage, $value)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        }

        // Save the new image paths array (make sure it's an array)
        $this->attributes['testimonial_images_details'] = json_encode($value);
    }



}

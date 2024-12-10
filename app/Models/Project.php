<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Project extends Model
{
    use HasFactory;

   
    protected $fillable = ['name', 'price', 'location', 'link', 'status','images', 'priority'];

    // Ensure the 'images' field is treated as an array
    protected $casts = [
        'images' => 'array', // Cast to array for easy handling
    ];

    // Optional: Handle the uploading/deletion of images when updating
    // public function setImagesAttribute($value)
    // {
    //     if ($this->exists && isset($this->attributes['images'])) {
    //         // If this is an update, we check if the images have changed
    //         $oldImages = $this->images;

    //         // Delete old images if new images are uploaded
    //         if ($oldImages) {
    //             foreach ($oldImages as $image) {
    //                 if (Storage::disk('public')->exists($image)) {
    //                     Storage::disk('public')->delete($image);
    //                 }
    //             }
    //         }
    //     }

    //     // Store the new images (assuming the repeater field returns an array of image paths)
    //     $this->attributes['images'] = $value;
    // }
}

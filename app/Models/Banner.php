<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Banner extends Model
{
    use HasFactory;


    protected $fillable = ['banner_image', 'heading','sub_heading'];


    public function setBannerImageAttribute($value)
    {

         // Check if this is an update (i.e., the model already exists in the database)
         if ($this->exists && $this->banner_image && $value !== $this->banner_image) {
            // Delete the old image, making sure to include the correct path
            Storage::disk('public')->delete($this->banner_image);
        }

        // Save the new image path (only the filename is stored in the database)
        $this->attributes['banner_image'] = $value;
    }
}

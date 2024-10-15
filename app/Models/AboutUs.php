<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class AboutUs extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'aboutUsImage',
        'year_of_experience',
        'projects_completed',
        'awards_won',
    ];

    public function setAboutUsImageAttribute($value)
    {

         // Check if this is an update (i.e., the model already exists in the database)
         if ($this->exists && $this->aboutUsImage && $value !== $this->aboutUsImage) {
            // Delete the old image, making sure to include the correct path
            Storage::disk('public')->delete($this->aboutUsImage);
        }

        // Save the new image path (only the filename is stored in the database)
        $this->attributes['aboutUsImage'] = $value;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'location', 'status', 'image', 'priority'];

    public function setImageAttribute($value)
    {
        // Check if this is an update (i.e., the model already exists in the database)
        if ($this->exists && $this->image && $value !== $this->image) {
            // Delete the old image, making sure to include the correct path
            Storage::disk('public')->delete($this->image);
        }

        // Save the new image path (only the filename is stored in the database)
        $this->attributes['image'] = $value;
    }
}

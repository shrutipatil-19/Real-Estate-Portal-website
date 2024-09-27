<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Media;
use App\Models\Project;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function aboutIndex()
    {
        $achievement = Achievement::first();
        return view('about-us',compact('achievement'));
    }


    public function TestimonialsIndex()
    {
        $testimonial = Testimonial::first();
        return view('testimonials',compact('testimonial'));
    }


    public function ProjectsIndex()
    {
        $projects = Project::paginate(3);
        return view('project',compact('projects'));
    }

    public function MediaIndex()
    {
        $media = Media::latest()->limit(5)->get();
        $mediaLimit = Media::latest()->paginate(2);
        return view('media',compact('media','mediaLimit'));
    }

    public function ContactUsIndex()
    {
        return view('contact-us');
    }
}

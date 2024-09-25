<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class AboutUsController extends Controller
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
}

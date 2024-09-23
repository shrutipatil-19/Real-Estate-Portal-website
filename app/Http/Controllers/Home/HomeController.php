<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Achievement;
use App\Models\Banner;
use App\Models\ParallaxEffect;
use App\Models\Project;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banner = Banner::first();
        $about_us = AboutUs::first();
        $projects = Project::get();
        $parallaxEffect = ParallaxEffect::first();
        $achievement = Achievement::first();
        $testimonial = Testimonial::first();
        return view('home',compact('banner','about_us','projects','parallaxEffect','achievement','testimonial'));
    }
}

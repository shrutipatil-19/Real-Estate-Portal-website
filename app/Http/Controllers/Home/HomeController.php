<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Achievement;
use App\Models\Banner;
use App\Models\Media;
use App\Models\ParallaxEffect;
use App\Models\Project;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('coming_soon_page');
    }
    
    
    public function home()
    {
        $banner = Banner::first();
        $about_us = AboutUs::first();
        $projects = Project::whereIn('priority', [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10])
            ->orderByRaw("FIELD(priority, 10, 9, 8, 7, 6, 5, 4, 3, 2, 1) DESC")
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();
        $parallaxEffect = ParallaxEffect::first();
        $achievement = Achievement::first();
        $testimonial = Testimonial::first();
        $media = Media::latest()->limit(2)->get();
        $mediaLimit = Media::latest()->limit(3)->get();
        $mediaLimit1 = Media::latest()->first();
        return view('home',compact('banner','about_us','projects','parallaxEffect','achievement','testimonial','media','mediaLimit','mediaLimit1'));
    }
}

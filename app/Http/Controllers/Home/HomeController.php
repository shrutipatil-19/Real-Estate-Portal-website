<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Banner;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banner = Banner::first();
        $about_us = AboutUs::first();
        $projects = Project::get();
        return view('home',compact('banner','about_us','projects'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\AboutUsSection;
use App\Models\Achievement;
use App\Models\BuyersGuide;
use App\Models\ContactUs;
use App\Models\Lead;
use App\Models\Media;
use App\Models\Project;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function aboutIndex()
    {
        $achievement = Achievement::first();
        $aboutUsSection = AboutUsSection::first();
        $ourMissionImages = json_decode($aboutUsSection->our_mission_image, true);

        // dd(); // This will display the separated array
        return view('about-us', compact('achievement', 'aboutUsSection','ourMissionImages'));
    }


    public function TestimonialsIndex()
    {
        $testimonial = Testimonial::first();
        return view('testimonials', compact('testimonial'));
    }


    public function ProjectsIndex()
    {
        $projects = Project::whereIn('priority', [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10])
            ->orderByRaw("FIELD(priority, 10, 9, 8, 7, 6, 5, 4, 3, 2, 1) DESC") // Show priority 10 first, then 9, and so on
            ->orderBy('created_at', 'desc') // Within those priorities, show the latest created_at first
            ->paginate(3);


        return view('project', compact('projects'));
    }

    public function MediaIndex()
    {
        $media = Media::latest()->limit(5)->get();
        $mediaLimit = Media::latest()->paginate(2);
        return view('media', compact('media', 'mediaLimit'));
    }

    public function ContactUsIndex()
    {
        $contact_us =  ContactUs::first();
        return view('contact-us', compact('contact_us'));
    }

    public function ContactUsStore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:leads,email',
            'message' => 'required|string',
            'terms_conditions' => 'required|integer', // Ensure checkbox is checked
        ]);

        Lead::create($validatedData);
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function BuyersGuideIndex()
    {
        $buyersGuide  =  BuyersGuide::first();
        return view('buyers-guide', compact('buyersGuide'));
    }


    public function MediaView(Request $request)
    {

        $media =  Media::find($request->media_id);

        return view('media-view', compact('media'));
    }
}

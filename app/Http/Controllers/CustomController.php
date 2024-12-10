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
        $ourMissionImages = $aboutUsSection->our_mission_image;

        // dd(); // This will display the separated array
        return view('about-us', compact('achievement', 'aboutUsSection','ourMissionImages'));
    }


    public function TestimonialsIndex()
    {
        $testimonial = Testimonial::first();
        return view('testimonials', compact('testimonial'));
    }


   public function ProjectsIndex(Request $request)
{
    // Retrieve the status from the query string; default to 'Ongoing' if not provided
    $status = $request->query('status', 'Ongoing');

    // Fetch projects filtered by status
    $projects = Project::where('status', $status)
        ->whereBetween('priority', [0, 10]) // Only priorities between 0 and 10
        ->orderBy('priority', 'desc') // Higher priority first
        ->orderBy('created_at', 'desc') // Within priority, newest projects first
        ->paginate(10);

    // Pass both projects and status to the view
    return view('project', compact('projects', 'status'));
}
   public function ProjectsDetails($id)
{
    $project = Project::findOrFail($id); // Get the project by ID
 
    return view('project-details', compact('project'));
}

    public function MediaIndex(Request $request)
    {
        $sortOrder = $request->short_by == 'desc' ? 'desc' : 'asc';

        // Limit the latest media based on the sort order
        $media = Media::orderBy('created_at', $sortOrder)->limit(5)->get();

        // Paginate the media based on the sort order
        $mediaLimit = Media::orderBy('created_at', $sortOrder)->paginate(2);
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

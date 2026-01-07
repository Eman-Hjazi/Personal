<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Language;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
        return view('front.index');
    }

    public function resume()
    {
        $experiences = Experience::latest()->get();
        $educations = Education::latest()->get();
        $skills = Skill::latest()->get();
        $languages = Language::latest()->get();
        return view('front.resume', compact('experiences', 'educations', 'skills', 'languages'));
    }

    public function projects()
    {
        $projects = Project::latest()->get();
        return view('front.projects', compact('projects'));
    }

    public function contact()
    {
        return view('front.contact');
    }
}

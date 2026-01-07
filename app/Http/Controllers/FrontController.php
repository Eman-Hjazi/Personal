<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Mail\ContactUs;
use App\Models\Message;
use App\Models\Project;
use App\Models\Language;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function contact_mail(Request $request){

        $request->validate([
            'name'=>'required|min:2|max:255',
            'email'=>'required|email|max:255',
            'phone'=>'required',
        ]);

        //save message to database
        Message::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message,
        ]);

        // send messages to admin email
        Mail::to('admin@example.com')->send(new ContactUs($request->except('_token')));


        flash()->success('Your message has been sent successfully.');
        return redirect()->back();


    }
}

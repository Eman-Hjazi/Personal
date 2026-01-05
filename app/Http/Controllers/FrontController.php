<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
        return view('front.index');

    }

    public function resume()
    {
        return view('front.resume');

    }

    public function projects()
    {
        return view('front.projects');
    }

    public function contact()
    {
        return view('front.contact');
    }



}

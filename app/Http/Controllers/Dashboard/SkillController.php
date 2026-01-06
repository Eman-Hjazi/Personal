<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use function Flasher\Prime\flash;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills= Skill::latest()->paginate(10);
        return view('dashboard.skills.index',compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.skills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|string|max:255',
        ]);

        Skill::create([
            'title'=>$request->title,
        ]);

        flash()->success('Skill Created Successfully');
        return redirect()->route('skills.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        return view('dashboard.skills.edit',compact('skill'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        $request->validate([
         'title'=>'required|string|max:255',

        ]);

        $skill->update([
            'title'=>$request->title
        ]);

        flash()->success('Skill Updated Successfully');
        return redirect()->route('skills.index');



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();
        flash()->success('Skill Deleted Successfully');
        return redirect()->route('skills.index');
    }
}

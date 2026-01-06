<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educations =Education::latest()->paginate(10);
        return view('dashboard.educations.index',compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.educations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'college' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'description' => 'nullable|string'
        ]);

        Education::create([
            'college' => $request->college,
            'location' => $request->location,
            'degree' => $request->degree,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'description' => $request->description,
        ]);

        flash()->success('Education  created successfully.');
        return redirect()->route('educations.index');
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
    public function edit(Education $education)
    {
        return view('dashboard.educations.edit',compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education)
    {
        $request->validate([
            'college' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'description' => 'nullable|string'
        ]);

        $education->update([
            'college' => $request->college,
            'location' => $request->location,
            'degree' => $request->degree,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'description' => $request->description,
        ]);

        flash()->success('Education  updated successfully.');
        return redirect()->route('educations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        $education->delete();
        flash()->success('Education deleted successfully.');
        return redirect()->route('educations.index');
    }
}

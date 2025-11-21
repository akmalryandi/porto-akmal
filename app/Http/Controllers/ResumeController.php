<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resumes = Resume::all();
        return view('resumes.index', compact('resumes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('resumes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'year'      => 'required|string|max:50',
            'job_title' => 'required|string|max:255',
            'company'   => 'required|string|max:255',
            'job_desc'  => 'nullable|string'
        ]);

        Resume::create($request->all());

        return redirect()->route('resumes.index')->with('success', 'Resume created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $resume = Resume::findOrFail($id);
        return view('resumes.edit', compact('resume'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'year'      => 'required|string|max:50',
            'job_title' => 'required|string|max:255',
            'company'   => 'required|string|max:255',
            'job_desc'  => 'nullable|string'
        ]);

        $resume = Resume::findOrFail($id);
        $resume->update($request->all());

        return redirect()->route('resumes.index')->with('success', 'Resume updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $resume = Resume::findOrFail($id);
        $resume->delete();

        return redirect()->route('resumes.index')->with('success', 'Resume deleted successfully!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Tool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with('tools')->get();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tools = Tool::all();
        return view('projects.create', compact('tools'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'link'        => 'nullable|string|max:255',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'tools'       => 'nullable|array'
        ]);

        $data = $request->except('tools');

        // Upload image
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('project_images', 'public');
        }

        $project = Project::create($data);

        // Attach tools
        if ($request->tools) {
            $project->tools()->attach($request->tools);
        }

        return redirect()->route('projects.index')->with('success', 'Project created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::with('tools')->findOrFail($id);
        $tools = Tool::all();

        return view('projects.edit', compact('project', 'tools'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'link'        => 'nullable|string|max:255',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'tools'       => 'nullable|array'
        ]);

        $project = Project::findOrFail($id);
        $data = $request->except('tools');

        // Update image
        if ($request->hasFile('image')) {
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }

            $data['image'] = $request->file('image')->store('project_images', 'public');
        }

        $project->update($data);

        // Sync tools (replace old with new)
        if ($request->tools) {
            $project->tools()->sync($request->tools);
        } else {
            $project->tools()->detach();
        }

        return redirect()->route('projects.index')->with('success', 'Project updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::findOrFail($id);

        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }

        // Remove relation
        $project->tools()->detach();

        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully!');
    }
}

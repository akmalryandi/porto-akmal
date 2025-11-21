<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ToolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tools = Tool::all();
        return view('tools.index', compact('tools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tools.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'icon_path' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048'
        ]);

        $data = $request->all();

        // Upload icon
        if ($request->hasFile('icon_path')) {
            $data['icon_path'] = $request->file('icon_path')->store('tool_icons', 'public');
        }

        Tool::create($data);

        return redirect()->route('tools.index')->with('success', 'Tool created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tool = Tool::findOrFail($id);
        return view('tools.edit', compact('tool'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'icon_path' => 'nullable|image|mimes:png,jpg,jpeg,svg|max:2048'
        ]);

        $tool = Tool::findOrFail($id);
        $data = $request->all();

        // Update icon
        if ($request->hasFile('icon_path')) {
            if ($tool->icon_path) {
                Storage::disk('public')->delete($tool->icon_path);
            }

            $data['icon_path'] = $request->file('icon_path')->store('tool_icons', 'public');
        }

        $tool->update($data);

        return redirect()->route('tools.index')->with('success', 'Tool updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tool = Tool::findOrFail($id);

        if ($tool->icon_path) {
            Storage::disk('public')->delete($tool->icon_path);
        }

        $tool->delete();

        return redirect()->route('tools.index')->with('success', 'Tool deleted successfully!');
    }
}

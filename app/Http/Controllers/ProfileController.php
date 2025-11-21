<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profiles = Profile::all();
        return view('profiles.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|email',
            'phone'     => 'nullable|string|max:50',
            'linkedin'  => 'nullable|string|max:255',
            'github'    => 'nullable|string|max:255',
            'bio'       => 'nullable|string',
            'about'     => 'nullable|string',
            'photo'     => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'galery'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data = $request->all();

        // Upload photo
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('photos', 'public');
        }

        // Upload galery
        if ($request->hasFile('galery')) {
            $data['galery'] = $request->file('galery')->store('galeries', 'public');
        }

        Profile::create($data);

        return redirect()->route('profiles.index')->with('success', 'Profile created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $profile = Profile::findOrFail($id);
        return view('profiles.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|email',
            'phone'     => 'nullable|string|max:50',
            'linkedin'  => 'nullable|string|max:255',
            'github'    => 'nullable|string|max:255',
            'bio'       => 'nullable|string',
            'about'     => 'nullable|string',
            'photo'     => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'galery'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $profile = Profile::findOrFail($id);
        $data = $request->all();

        // Update photo
        if ($request->hasFile('photo')) {
            // remove old photo if exists
            if ($profile->photo) {
                Storage::disk('public')->delete($profile->photo);
            }
            $data['photo'] = $request->file('photo')->store('photos', 'public');
        }

        // Update galery
        if ($request->hasFile('galery')) {
            if ($profile->galery) {
                Storage::disk('public')->delete($profile->galery);
            }
            $data['galery'] = $request->file('galery')->store('galeries', 'public');
        }

        $profile->update($data);

        return redirect()->route('profiles.index')->with('success', 'Profile updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $profile = Profile::findOrFail($id);

        if ($profile->photo) {
            Storage::disk('public')->delete($profile->photo);
        }

        if ($profile->galery) {
            Storage::disk('public')->delete($profile->galery);
        }

        $profile->delete();

        return redirect()->route('profiles.index')->with('success', 'Profile deleted successfully!');
    }
}

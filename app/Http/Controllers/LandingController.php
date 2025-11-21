<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Resume;
use App\Models\Tool;
use App\Models\Project;

class LandingController extends Controller
{
     public function index()
    {
        return view('landing', [
            'profile'  => Profile::first(),
            'resumes'  => Resume::orderBy('year', 'desc')->get(),
            'tools'    => Tool::all(),
            'projects' => Project::latest()->get(),

        ]);
    }
}

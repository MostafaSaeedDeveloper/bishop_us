<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\View\View;

class ProjectController extends Controller
{
    public function index(): View { return view('front.projects.index', ['projects' => Project::latest()->get()]); }
    public function show(Project $project): View { return view('front.projects.show', compact('project')); }
}

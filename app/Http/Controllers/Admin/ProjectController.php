<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProjectController extends Controller
{
    public function index(): View { return view('admin.projects.index', ['projects' => Project::latest()->paginate(10)]); }
    public function create(): View { return view('admin.projects.create'); }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'title' => 'required|string|max:255', 'service' => 'nullable|string|max:255', 'client' => 'nullable|string|max:255',
            'technology' => 'nullable|string|max:255', 'description' => 'nullable|string',
            'featured_image' => 'nullable|image|max:4096', 'gallery.*' => 'nullable|image|max:4096',
        ]);
        $data['featured_image'] = $request->file('featured_image')?->store('projects', 'public');
        $data['gallery'] = collect($request->file('gallery', []))->map(fn($img) => $img->store('projects/gallery', 'public'))->values()->all();
        Project::create($data);
        return redirect()->route('admin.projects.index')->with('success', 'Project created.');
    }

    public function edit(Project $project): View { return view('admin.projects.edit', compact('project')); }

    public function update(Request $request, Project $project): RedirectResponse
    {
        $data = $request->validate([
            'title' => 'required|string|max:255', 'service' => 'nullable|string|max:255', 'client' => 'nullable|string|max:255',
            'technology' => 'nullable|string|max:255', 'description' => 'nullable|string',
            'featured_image' => 'nullable|image|max:4096', 'gallery.*' => 'nullable|image|max:4096',
        ]);
        if ($request->hasFile('featured_image')) {
            Storage::disk('public')->delete($project->featured_image);
            $data['featured_image'] = $request->file('featured_image')->store('projects', 'public');
        }
        if ($request->hasFile('gallery')) {
            collect($project->gallery ?? [])->each(fn($img) => Storage::disk('public')->delete($img));
            $data['gallery'] = collect($request->file('gallery'))->map(fn($img) => $img->store('projects/gallery', 'public'))->values()->all();
        }
        $project->update($data);
        return redirect()->route('admin.projects.index')->with('success', 'Project updated.');
    }

    public function destroy(Project $project): RedirectResponse
    {
        Storage::disk('public')->delete($project->featured_image);
        collect($project->gallery ?? [])->each(fn($img) => Storage::disk('public')->delete($img));
        $project->delete();
        return back()->with('success', 'Project deleted.');
    }
}

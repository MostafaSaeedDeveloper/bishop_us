<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ProjectsController extends Controller
{
    public function frontIndex(): View
    {
        $projects = Project::query()->where('status', 'published')->latest()->paginate(9);

        return view('front.projects.index', compact('projects'));
    }

    public function frontShow(Project $project): View
    {
        $project->load('media');

        $similarProjects = Project::query()
            ->where('id', '!=', $project->id)
            ->when($project->category, fn ($query) => $query->where('category', $project->category))
            ->where('status', 'published')
            ->latest()
            ->take(3)
            ->get();

        return view('front.projects.show', compact('project', 'similarProjects'));
    }

    public function dashboard(): View
    {
        $projectsCount = Project::count();
        $usersCount = User::count();
        $servicesCount = Schema::hasTable('services') ? DB::table('services')->count() : 0;
        $latestProjects = Project::latest()->take(5)->get();

        return view('admin.index', compact('projectsCount', 'usersCount', 'servicesCount', 'latestProjects'));
    }

    public function index(): View
    {
        $projects = Project::latest()->paginate(15);

        return view('admin.projects.index', compact('projects'));
    }

    public function create(): View
    {
        return view('admin.projects.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validatedData($request);
        $project = Project::create($data);

        $this->syncMedia($project, $request);

        return redirect()->route('admin.projects.index')->with('status', 'Project created successfully.');
    }

    public function edit(Project $project): View
    {
        $project->load('media');

        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project): RedirectResponse
    {
        $data = $this->validatedData($request, $project);
        $project->update($data);

        $this->syncMedia($project, $request, true);

        return redirect()->route('admin.projects.index')->with('status', 'Project updated successfully.');
    }

    public function destroy(Project $project): RedirectResponse
    {
        $project->delete();

        return redirect()->route('admin.projects.index')->with('status', 'Project deleted successfully.');
    }

    private function validatedData(Request $request, ?Project $project = null): array
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', Rule::unique('projects', 'slug')->ignore($project?->id)],
            'client_name' => ['required', 'string', 'max:255'],
            'category' => ['nullable', 'string', 'max:255'],
            'short_description' => ['required', 'string', 'max:500'],
            'description' => ['required', 'string'],
            'status' => ['required', 'in:draft,published,archived'],
            'execution_date' => ['nullable', 'date'],
            'featured_image' => ['nullable', 'image', 'max:4096'],
            'gallery_images.*' => ['nullable', 'image', 'max:4096'],
        ]);

        $validated['slug'] = $validated['slug'] ? Str::slug($validated['slug']) : Str::slug($validated['name']);

        return $validated;
    }

    private function syncMedia(Project $project, Request $request, bool $isUpdate = false): void
    {
        if ($request->hasFile('featured_image')) {
            if ($isUpdate) {
                $project->clearMediaCollection('featured_image');
            }

            $media = $project->addMediaFromRequest('featured_image')->toMediaCollection('featured_image');
            $project->updateQuietly(['featured_image' => $media->getUrl()]);
        }

        if ($request->hasFile('gallery_images')) {
            if ($isUpdate) {
                $project->clearMediaCollection('gallery_images');
            }

            foreach ($request->file('gallery_images') as $galleryImage) {
                $project->addMedia($galleryImage)->toMediaCollection('gallery_images');
            }
        }
    }
}

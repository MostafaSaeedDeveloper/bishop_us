<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\View\View;

class PagesController extends Controller
{
    public function home(): View
    {
        return view('front.index');
    }

    public function about(): View
    {
        return view('front.about');
    }

    public function services(): View
    {
        $services = Project::query()
            ->select('service')
            ->whereNotNull('service')
            ->where('service', '!=', '')
            ->groupBy('service')
            ->orderBy('service')
            ->get()
            ->map(fn ($row) => [
                'name' => $row->service,
                'projects_count' => Project::where('service', $row->service)->count(),
                'technologies' => Project::where('service', $row->service)
                    ->whereNotNull('technology')
                    ->pluck('technology')
                    ->filter()
                    ->unique()
                    ->take(5)
                    ->values(),
            ]);

        return view('front.services.index', compact('services'));
    }

    public function serviceShow(string $service): View
    {
        $serviceName = str_replace('-', ' ', $service);

        $projects = Project::query()
            ->whereRaw('LOWER(service) = ?', [strtolower($serviceName)])
            ->latest()
            ->get();

        abort_if($projects->isEmpty(), 404);

        $technologies = $projects->pluck('technology')->filter()->unique()->values();

        return view('front.services.show', [
            'serviceName' => $projects->first()->service,
            'projects' => $projects,
            'technologies' => $technologies,
        ]);
    }

    public function contact(): View
    {
        return view('front.contact');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactSubmissionController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'company' => ['nullable', 'string', 'max:255'],
            'budget' => ['required', 'string', 'max:255'],
            'solution' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        ContactSubmission::create($data);

        return redirect()->route('front.contact')->with('status', 'Your message has been sent successfully.');
    }

    public function index(): View
    {
        $submissions = ContactSubmission::latest()->paginate(25);

        return view('admin.contact-submissions.index', compact('submissions'));
    }
}

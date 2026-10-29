<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutContent;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function updateProfilePicture(Request $request): RedirectResponse
    {
        $request->validate([
            'avatar' => ['required', 'image', 'mimes:png', 'max:5120'],
        ]);

        $request->file('avatar')->storeAs('branding', 'avatar.png', 'public');

        return redirect()->route('admin.about.edit')->with('success', 'Profile picture updated. Export and deploy again to update static hosting.');
    }

    public function edit()
    {
        $about = AboutContent::firstOrCreate([], [
            'bio' => 'A software engineer passionate about creating scalable backend systems...',
            'projects_count' => 8,
            'experience_years' => 2,
            'expertise_level' => 'Software Engineer',
            'development_type' => 'Laravel & Web Systems',
        ]);

        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'bio' => 'required|string',
            'projects_count' => 'required|integer|min:0',
            'experience_years' => 'required|numeric|min:0',
            'expertise_level' => 'required|string|max:255',
            'development_type' => 'required|string|max:255',
        ]);

        $about = AboutContent::firstOrCreate([]);

        if ($request->hasFile('profile_image')) {
            $validated['profile_image'] = $request->file('profile_image')->store('about', 'public');
        }

        $about->update($validated);

        return redirect()->route('admin.about.edit')->with('success', 'About section updated successfully!');
    }
}

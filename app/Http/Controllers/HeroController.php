<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroController extends Controller
{
    public function index()
    {
        $hero = Hero::firstOrCreate([]);
        return view('admin.hero.index', compact('hero'));
    }

    public function update(Request $request)
    {
        $hero = Hero::firstOrCreate([]);

        $validated = $request->validate([
            'badge' => ['nullable', 'string', 'max:255'],
            'title' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'button_text_one' => ['nullable', 'string', 'max:255'],
            'button_text_two' => ['nullable', 'string', 'max:255'],
            'button_link_one' => ['nullable', 'string', 'max:255'],
            'button_link_two' => ['nullable', 'string', 'max:255'],
        ]);

        if ($request->hasFile('image')) {
            if ($hero->image && Storage::disk('public')->exists($hero->image)) {
                Storage::disk('public')->delete($hero->image);
            }

            $validated['image'] = $request->file('image')->store('hero', 'public');
        }

        $hero->update($validated);

        return back()->with('success', 'Hero updated successfully.');
    }
}

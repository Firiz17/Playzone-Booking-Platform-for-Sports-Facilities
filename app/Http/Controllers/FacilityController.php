<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facility;
use App\Models\User;

class FacilityController extends Controller
{
    // Display a listing of the facilities
    public function index()
    {
        $facilities = Facility::all();
        return view('facilities.index', ['facilities' => $facilities]);

    }

    // Show the form for creating a new facility
    public function create()
    {
        return view('facilities.create');
    }

    // Store a newly created facility in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'available_sports' => 'required|string',
            'pricing' => 'required|numeric',
            'photos' => 'nullable|array',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $photos = [];
        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $path = $photo->store('photos', 'public');
                $photos[] = $path;
            }
        }

        Facility::create([
            'name' => $validatedData['name'],
            'location' => $validatedData['location'],
            'available_sports' => $validatedData['available_sports'],
            'pricing' => $validatedData['pricing'],
            'photos' => json_encode($photos),
        ]);

        return redirect()->route('facilities.index')->with('success', 'Facility added successfully.');
    }

    // Show the form for editing the specified facility
    public function edit($id)
    {
        $facility = Facility::findOrFail($id);
        return view('facilities.edit', compact('facility'));
    }

    // Update the specified facility in the database
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'available_sports' => 'required|string',
            'pricing' => 'required|numeric',
            'photos' => 'nullable|array',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $facility = Facility::findOrFail($id);

        $photos = json_decode($facility->photos, true) ?? [];
        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $path = $photo->store('photos', 'public');
                $photos[] = $path;
            }
        }

        $facility->update([
            'name' => $validatedData['name'],
            'location' => $validatedData['location'],
            'available_sports' => $validatedData['available_sports'],
            'pricing' => $validatedData['pricing'],
            'photos' => json_encode($photos),
        ]);

        return redirect()->route('facilities.index')->with('success', 'Facility updated successfully.');
    }

    // Remove the specified facility from the database
    public function destroy($id)
    {
        $facility = Facility::findOrFail($id);

        // Delete associated photos
        $photos = json_decode($facility->photos, true) ?? [];
        foreach ($photos as $photo) {
            \Storage::disk('public')->delete($photo);
        }

        $facility->delete();

        return redirect()->route('facilities.index')->with('success', 'Facility deleted successfully.');
    }
}

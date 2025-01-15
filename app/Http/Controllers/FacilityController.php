<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facility;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FacilityController extends Controller
{

    public function show()
    {
        $user = Auth::user();  // Get the currently authenticated user
        $facilities = Facility::all();
            if ($user->role === 'customer') {
                return view('facilities.userIndex', ['facilities' => $facilities]);

            }

            elseif ($user->role === 'owner') {
                $facilities = Facility::where('user_id', $user->id)
                                ->orderBy('created_at', 'desc')  // Optional: you can order by created date or any other field
                                ->paginate(10);  // Paginate for better performance if many facilities are present
                return view('facilities.index', ['facilities' => $facilities]);

            }

            else {
                abort(403, 'Unauthorized access.');  // Prevent unauthorized roles from accessing this method
            }
    }

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
            'user_id' => auth()->id(), // Get the ID of the authenticated user
        ]);

        return redirect()->route('facilities.show')->with('success', 'Facility added successfully.');
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

        return redirect()->route('facilities.show')->with('success', 'Facility updated successfully.');
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

        return redirect()->route('facilities.show')->with('success', 'Facility deleted successfully.');
    }
}

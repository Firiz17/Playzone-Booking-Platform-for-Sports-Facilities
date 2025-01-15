<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Facility;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function customerComments($id)
{
    $facilityName = Facility::findOrFail($id)->name;
    $averageRating =round(Review::avg('reviews'),1);
    $totalReviews = Review::whereHas('user', function ($query) {
        $query->where('role', 'customer');
    })->count();
    $comments = Review::with('user')
                ->orderBy('created_at', 'desc')
                ->paginate(10);


    return view("review.show", [
        'comments' => $comments,
        'rating'=>$averageRating,
        'review'=>$totalReviews,
        'name'=>$facilityName
    ]);
}
        public function ownerComments($id)
        {
            $facilityName = Facility::findOrFail($id)->name;
            $averageRating =round(Review::avg('reviews'),1);
            $totalReviews = Review::whereHas('user', function ($query) {
                $query->where('role', 'customer');
            })->count();

            $comments = Review::with('user')
                ->orderBy('created_at', 'desc')
                ->paginate(10);

                return view("review.showOwner", [
                    'comments' => $comments,
                    'rating'=>$averageRating,
                    'review'=>$totalReviews,
                    'name'=>$facilityName
                ]);
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id = null)
        {
            $user = Auth::user();  // Get the currently authenticated user

            if ($user->role === 'customer') {
                return view('review.createCustomer');  // Customers can only create comments, no parent_id
            } elseif ($user->role === 'owner') {
                if ($id) {
                    $comment = Review::find($id);  // Find the comment by ID
                    if ($comment) {
                        $username = $comment->user->username;
                        // Get the username of the user (customer) who made the comment
                        return view('review.createOwner', ['username' => $username]);  // Pass only the username to the view
                    }
                    else {
                        abort(404, 'Comment not found.');
                    };
                }
                return view('review.createOwner');  // No comment to reply to
            } else {
                abort(403, 'Unauthorized access.');
            }
        }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
        {
            $validated = $request->validate([
                'comments' => 'required|string',
                'reviews' => 'required|integer|between:1,5',
            ]);

            $review = new Review();
            $review->comments = $validated['comments'];
            $review->reviews = $validated['reviews'];
            $review->user_id = Auth::id(); // Store the logged-in user's ID

            // No need to set parent_id for customers
            if ($request->has('parent_id')) {
                $review->parent_id = $validated['parent_id']; // Only set parent_id if it's a reply
            }

            $review->save();

            // Redirect to the appropriate page after saving the review
            if (Auth::user()->role === 'customer') {
                return redirect()->route('review.customerComment');
            } elseif (Auth::user()->role === 'owner') {
                return redirect()->route('review.ownerComment');
            }
        }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $user = Auth::user();  // Get the currently authenticated user

            if ($user->role === 'customer') {
                return view('review.show');
            } elseif ($user->role === 'owner') {
                return view('review.showOwner');
            } else {
                abort(403, 'Unauthorized access.');  // Prevent unauthorized roles from accessing this method
            }
    }

    public function average(Request $request)
{
    // Calculate the average rating from the 'reviews' column
    $averageRating =Review::avg('reviews');
    $totalReviews =Review::count();

    // Return the view with both values passed
    return view('review.show', [
        'rating' => number_format($averageRating, 2),
        'review' => $totalReviews
    ]);
}
    public function edit(Review $review)
    {
        return'edit';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}

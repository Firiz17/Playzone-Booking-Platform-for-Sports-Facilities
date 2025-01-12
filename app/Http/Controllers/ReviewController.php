<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function customerComments()
{
    $comments = Review::with('user')
                ->orderBy('created_at', 'desc')
                ->paginate(10);
    // Retrieve comments from customers, including owner replies
    //$comments = Review::with(['replies' => function($query) {
   //     $query->whereHas('user', function($subQuery) {
    //        $subQuery->where('role', 'owner');  // Only fetch replies from owners
    //    })->with('user');  // Ensure the user information is eager-loaded
    //}])
    //->whereHas('user', function($query) {
    //    $query->where('role', 'customer');  // Only fetch comments from customers
    //})
    //->orderBy('created_at', 'desc')  // Order by creation date, most recent first
    //->paginate(10);  // Paginate the results

    return view("review.show", ['comments' => $comments]);
}
        public function ownerComments()
        {

            $comments = Review::with('user')
                ->orderBy('created_at', 'desc')
                ->paginate(10);

            return view("review.showOwner", ['comments' => $comments]);
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

    /**
     * Show the form for editing the specified resource.
     */
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

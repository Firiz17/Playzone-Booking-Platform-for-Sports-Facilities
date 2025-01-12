<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comment = Review::query()->with('user')->orderBy('created_at')->paginate(5);
        return view("review.show",['comments'=>$comment]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("review.createCustomer");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            Review::create([
            'user_id' => 1,
            'comments' => $request->input('comments'),
            'reviews' => $request->input('reviews'),
        ]);
        return redirect()->route('review.index')->with('success', 'Comment added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        return'show';
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
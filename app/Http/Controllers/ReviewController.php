<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
     public function index()
    {
        $reviews = Review::all();
        return view('reviews.index', 
        [
        "reviews" => $reviews
        ]);
    }

    public function show($id)
    {
        $review = Review::find($id);
        return view('reviews.show', [
            "review" => $review
        ]);
    }

    public function store(Request $request)
    {
        // Validation logic for review submission
        $request->validate([
            'content' => 'required',
            // Add other validation rules as needed
        ]);

        // Create a new review
        $review = new Review([
            'user_id' => auth()->id(), // Assuming users are authenticated
            'content' => $request->input('content'),
        ]);
        $review->save();

        // Redirect or return a response as needed
        return redirect()->route('reviews.index')->with('success', 'Review submitted successfully.');
    }
}

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
            'textereaInfo' => 'required',
            'firstName' => 'required',
            'userName' => 'required',
        ]);

        
         $userIdentifier = auth()->check() ? auth()->id() : 1;

        // Create a new review
        $review = new Review([
            'textereaInfo' => $request->input('textereaInfo', ''),
            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName'),
            'userName' => $request->input('userName'),
            'emailAdress' => $request->input('emailAdress'),
            'subjectSelect' => $request->input('subjectSelect'),
        ]);

        $review->save();

        // Redirect or return a response as needed
        return redirect()->route('reviews.index')->with('success', 'Review submitted successfully.');
    }
}

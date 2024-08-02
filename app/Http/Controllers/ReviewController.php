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
        $reviews = Review::all();
        return view("admin.review.index", compact("reviews"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view("admin.review.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Review::create([
            "content" => $request->content,
            "user_id" => 1,
            "client_name" => $request->client_name,
            "url" => $request->url
        ]);
        return redirect("/admin/review");
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
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
    public function destroy($id)
    {
        Review::find($id)->delete();
        return redirect()->back();
    }
}

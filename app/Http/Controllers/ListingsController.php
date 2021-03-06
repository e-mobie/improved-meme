<?php

namespace App\Http\Controllers;

use App\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $listings = Auth::user()->Listings;
        
        return view('User.listings.all', compact('listings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('User.dashboard.createlistings');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $listing = Auth::user()->Listings()->create($request->validate([
          'title' => 'required|min:3',
          'category' => 'required',
          'keywords' => 'nullable',
          'city' => 'required|min:5',
          'state' => 'required|min:2',
          'address' => 'required|min:5',
          'zip' => 'required|min:3',
          'details' => 'nullable',
          'phone' => 'nullable',
          'website' => 'nullable',
          'email' => 'nullable',
          'facebook' => 'nullable',
          'twitter'=> 'nullable',
          'google' => 'nullable'
        ]));

        return redirect()->route('listing.edit', $listing);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function show(Listing $listing)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function edit(Listing $listing)
    {
        //
        // return $listing;
        return view('User.dashboard.editlistings', compact('listing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listing $listing)
    {
        //
        $listing->update($request->all());

        return redirect()->back()->with('success', 'Your Listing has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing)
    {
        //
    }
}

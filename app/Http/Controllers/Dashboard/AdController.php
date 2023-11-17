<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\AdSlot;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $ads = Ad::all();
        return view('dashboard.ads.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users=User::all();
        $categories=Category::all();
        $adSlots=AdSlot::all();
        return view('dashboard.ads.create', compact('users', 'categories', 'adSlots'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validate the request
        $validatedData = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'media_url' => 'nullable',
            'price' => 'required|numeric',
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'ad_slot_id' => 'required|exists:ad_slots,id',
        ]);

        // Create a new ad
        Ad::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'media_url' => $validatedData['media_url'],
            'price' => $validatedData['price'],
            'user_id' => $validatedData['user_id'],
            'category_id' => $validatedData['category_id'],
            'ad_slot_id' => $validatedData['ad_slot_id'],
        ]);

        // Redirect to the ads index page or any other desired route
        return redirect()->route('dashboard.ads.index')->with('success', 'Ad created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $users=User::all();
        $categories=Category::all();
        $adSlots=AdSlot::all();
        $ad=Ad::findOrFail($id);
        return view('dashboard.ads.edit', compact('ad', 'users', 'categories', 'adSlots'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ad=Ad::findOrFail($id);

        // Validate the request
        $validatedData = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'media_url' => 'nullable',
            'price' => 'required|numeric',
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'ad_slot_id' => 'required|exists:ad_slots,id',
        ]);

        // Create a new ad
        $ad->update([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'media_url' => $validatedData['media_url'],
            'price' => $validatedData['price'],
            'user_id' => $validatedData['user_id'],
            'category_id' => $validatedData['category_id'],
            'ad_slot_id' => $validatedData['ad_slot_id'],
        ]);

        // Redirect to the ads index page or any other desired route
        return redirect()->route('dashboard.ads.index')->with('success', 'Ad Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ad=Ad::findOrFail($id);
        $ad->delete();
        return redirect()->route('dashboard.ads.index')->with('success', 'Ad Deleted successfully');

    }
}

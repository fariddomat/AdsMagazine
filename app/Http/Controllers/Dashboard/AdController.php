<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\AdSlot;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AdController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:superadministrator|administrator|advertiser']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ads='';
        if (auth()->user()->hasRole('advertiser')) {
            $ads = Ad::where('user_id', auth()->id())->latest()->paginate(10);
        } else {

            $ads = Ad::latest()->paginate(10);
        }
        return view('dashboard.ads.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $categories = Category::all();
        $adSlots = AdSlot::all();
        return view('dashboard.ads.create', compact('users', 'categories', 'adSlots'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validate the request
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'media' => 'nullable',
            'price' => 'required|numeric',
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'ad_slot_id' => 'required|exists:ad_slots,id',
        ]);



        $request_data = $request->except(['media']);

        if ($request->media) {
            $media = Image::make($request->media)->resize(671, 480)
                ->encode('webp', 90);
            Storage::disk('public')->put('ads/' . $request->media->hashName(), (string)$media, 'public');
            $request_data['media_url'] = $request->media->hashName();
        }
        // Create a new ad
        if (Auth::user()->status == 'active') {
            $request_data['status']='approved';
        }
        Ad::create($request_data);

        // Redirect to the ads index page or any other desired route
        return redirect()->route('dashboard.ads.index')->with('success', 'Ad created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = User::all();
        $categories = Category::all();
        $adSlots = AdSlot::all();
        $ad = Ad::findOrFail($id);
        return view('dashboard.ads.show', compact('ad', 'users', 'categories', 'adSlots'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $users = User::all();
        $categories = Category::all();
        $adSlots = AdSlot::all();
        $ad = Ad::findOrFail($id);
        return view('dashboard.ads.edit', compact('ad', 'users', 'categories', 'adSlots'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ad = Ad::findOrFail($id);

        // Validate the request
        $validatedData = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'media' => 'nullable',
            'price' => 'required|numeric',
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'ad_slot_id' => 'required|exists:ad_slots,id',
        ]);

        $request_data = $request->except(['media']);

        if ($request->media) {
            Storage::disk('public')->delete('ads/' . $ad->media_url);
            $media = Image::make($request->media)->resize(671, 480)
                ->encode('webp', 90);
            Storage::disk('public')->put('ads/' . $request->media->hashName(), (string)$media, 'public');
            $request_data['media_url'] = $request->media->hashName();
        }
        // Update ad
        $ad->update($request_data);

        // Redirect to the ads index page or any other desired route
        return redirect()->route('dashboard.ads.index')->with('success', 'Ad Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ad = Ad::findOrFail($id);
        $ad->delete();
        return redirect()->route('dashboard.ads.index')->with('success', 'Ad Deleted successfully');
    }
    public function accept(string $id)
    {
        $ad = Ad::findOrFail($id);
        $ad->update([
            'status' => 'approved'
        ]);
        return redirect()->route('dashboard.ads.index')->with('success', 'Ad Accepted successfully');
    }
    public function reject(string $id)
    {
        $ad = Ad::findOrFail($id);
        $ad->update([
            'status' => 'reject'
        ]);
        return redirect()->route('dashboard.ads.index')->with('success', 'Ad Rejected successfully');
    }
}

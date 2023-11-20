<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\AdClick;
use App\Models\AdSlot;
use App\Models\AdView;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $ads = Ad::latest()->paginate(6);
        foreach ($ads as $ad) {
            AdView::create([
                'ad_id' => $ad->id,
                'user_id' => auth()->id(),
            ]);
        }
        $adsWithMostViews = Ad::orderByViews()->limit(4)->get();
        $adsWithMostClicks = Ad::orderByClicks()->limit(6)->get();
        $userWithMostAdViews = User::withCount('ads', 'adViews')
            ->orderByDesc('ads_count')
            ->orderByDesc('ad_views_count')
            ->first();
        return view('home.index', compact('ads', 'adsWithMostViews', 'adsWithMostClicks', 'userWithMostAdViews'));
    }
    public function categories()
    {
        $categories = Category::paginate(8);
        return view('home.categories', compact('categories'));
    }
    public function show($id)
    {
        $ads = Ad::latest()->limit(4)->get();
        $ad = Ad::findOrFail($id);
        AdView::create([
            'ad_id' => $ad->id,
            'user_id' => auth()->id(),
        ]);
        AdClick::create([
            'ad_id' => $ad->id,
            'user_id' => auth()->id(),
        ]);
        return view('home.show', compact('ads', 'ad'));
    }
    public function search(Request $request)
    {
        $ads_count=Ad::count();
        if ($request->category_id !='') {
            $query=$request->category_id;
            $ads=Ad::whereHas('category', function ($userQuery) use ($query) {
                $userQuery->where('id',"$query");
            })->paginate(5);
            // dd($ads);
            $ads->appends(['category_id' => $request->input('category_id')]);
            $ads->appends(['search' => $request->input('search')]);
            return view('home.search', compact('ads','ads_count'));
        }
        $query = $request->input('search');

        $ads = Ad::where('title', 'like', "%$query%")
            ->orWhere('description', 'like', "%$query%")
            ->orWhereHas('user', function ($userQuery) use ($query) {
                $userQuery->where('name', 'like', "%$query%");
            })
            ->paginate(5);
            $ads->appends(['search' => $request->input('search')]);

        return view('home.search', compact('ads', 'ads_count'));
    }
    public function about()
    {
        return view('home.about');
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function pricing()
    {
        $ad_slots = AdSlot::all();
        return view('home.pricing', compact('ad_slots'));
    }
}

<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\AdClick;
use App\Models\AdSlot;
use App\Models\AdView;
use App\Models\Category;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $ads = Ad::where('status','approved')->with('ad_slot')
            ->whereHas('ad_slot', function ($query) {
                $query->where(DB::raw('DATE_ADD(ads.created_at, INTERVAL ad_slots.duration DAY)'), '>', now())->orderByDesc('ad_slots.price');
            })
            ->orderBy('ads.created_at', 'desc')
            ->paginate(6);
        foreach ($ads as $ad) {
            AdView::create([
                'ad_id' => $ad->id,
                'user_id' => auth()->id(),
            ]);
        }
        $adsWithMostViews = Ad::where('status','approved')->orderByViews()->limit(4)->get();
        $adsWithMostClicks = Ad::where('status','approved')->orderByClicks()->limit(6)->get();
        $adsWithMostContacts = Ad::withCount('contacts')
        ->orderByDesc('contacts_count')
        ->limit(6)->get();
        $userWithMostAdViews = User::withCount('ads', 'adViews')
            ->orderByDesc('ads_count')
            ->orderByDesc('ad_views_count')
            ->first();
        return view('home.index', compact('ads', 'adsWithMostViews', 'adsWithMostClicks', 'userWithMostAdViews', 'adsWithMostContacts'));
    }
    public function categories()
    {
        $categories = Category::paginate(8);
        return view('home.categories', compact('categories'));
    }
    public function show($id)
    {
        $ads = Ad::where('status','approved')->latest()->limit(4)->get();
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
        $categories=Category::all();
        $ads_count = Ad::count();
        if ($request->category_id != '') {
            $query = $request->category_id;
            $ads = Ad::where('status','approved')->whereHas('category', function ($userQuery) use ($query) {
                $userQuery->where('id', "$query");
            })->paginate(5);
            // dd($ads);
            $ads->appends(['category_id' => $request->input('category_id')]);
            $ads->appends(['search' => $request->input('search')]);
            return view('home.search', compact('ads', 'ads_count', 'categories'));
        }

        if ($request->user_id != '') {
            $query = $request->user_id;
            $ads = Ad::where('status','approved')->whereHas('user', function ($userQuery) use ($query) {
                $userQuery->where('id', "$query");
            })->paginate(5);
            // dd($ads);
            $ads->appends(['user_id' => $request->input('user_id')]);
            $ads->appends(['search' => $request->input('search')]);
            return view('home.search', compact('ads', 'ads_count', 'categories'));
        }
        $query = $request->input('search');

        $ads = Ad::where('status','approved')->where('title', 'like', "%$query%")
            ->orWhere('description', 'like', "%$query%")
            ->orWhereHas('user', function ($userQuery) use ($query) {
                $userQuery->where('name', 'like', "%$query%");
            })
            ->paginate(5);
        $ads->appends(['search' => $request->input('search')]);

        return view('home.search', compact('ads', 'ads_count', 'categories'));
    }
    public function about()
    {
        return view('home.about');
    }
    public function contact()
    {
        $ads = Ad::all();
        return view('home.contact', compact('ads'));
    }
    public function postContact(Request $request)
    {
        $request->validate([
            'ad_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        Contact::create($request->all());
        return redirect()->route('home.index');
    }
    public function pricing()
    {
        $ad_slots = AdSlot::all();
        return view('home.pricing', compact('ad_slots'));
    }
}

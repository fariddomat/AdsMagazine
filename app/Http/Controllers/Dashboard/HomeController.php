<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\AdSlot;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if (auth()->user()->hasRole('advertiser')) {
        } else {
            $categories = Category::count();
            $ad_slots = AdSlot::count();
            $ads = Ad::count();
            $users = User::whereRoleNot('superadministrator')->count();
            $advertiser = User::whereRole('advertiser')->count();
            return view('dashboard.index', compact('categories', 'ad_slots', 'ads', 'users', 'advertiser'));
        }
    }
}

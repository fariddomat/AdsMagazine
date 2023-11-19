<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{


    public function __construct()
    {
        $this->middleware(['role:superadministrator']);
    }


    public function about()
    {
        return view('dashboard.settings.about');
    }

    public function social()
    {
        return view('dashboard.settings.social');
    }

    public function settings(Request $request)
    {
        setting($request->all())->save();
        // SettingLog::log('success', auth()->id(), 'Update Settings', null);
        session()->flash('success', 'Successfully updated !');
        return redirect()->back();
    }

}

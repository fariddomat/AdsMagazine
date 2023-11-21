<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index(){

        if (auth()->user()->hasRole('advertiser')) {
           $contacts=Auth::user()->ads()->with('contacts')->get()->flatMap(function ($ad) {
            return $ad->contacts;
        });
           return view('dashboard.contacts.index', compact('contacts'));
        }
        $contacts=Contact::latest()->get();
        return view('dashboard.contacts.index', compact('contacts'));
    }

    public function view($id){
        $contact=Contact::findOrFail($id);
        $contact->update([
            'status' => 'Done'
        ]);
        return redirect()->back();
    }
}

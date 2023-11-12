<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home.index');
    }
    public function categories() {
        return view('home.categories');
    }
    public function show() {
        return view('home.show');
    }
    public function search() {
        return view('home.search');
    }
    public function about() {
        return view('home.about');
    }
    public function contact() {
        return view('home.contact');
    }
}

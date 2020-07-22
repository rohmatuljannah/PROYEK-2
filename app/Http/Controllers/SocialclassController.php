<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialclassController extends Controller
{
    public function homepage()
    {
        return view('umum');
    }

    public function act()
    {
        return view('act');
    }

    public function volunteer()
    {
        return view('volunteer');
    }

    public function about()
    {
        return view('about');
    }
    public function home()
    {
        return view('home');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }


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

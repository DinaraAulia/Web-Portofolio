<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('page/about');
    }

    public function portofolio()
    {
        return view('page/portofolio');
    }

    public function interest()
    {
        return view('page/interest');
    }

    public function contact()
    {
        return view('page/contact');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function main()
    {
        return view('site.main');
    }

    public function about()
    {
        return view('site.about');
    }

    public function schedule()
    {
        return view('site.schedule');
    }

    public function groups()
    {
        return view('site.groups');
    }

    public function galeryVideo()
    {
        return view('site.galeryVideo');
    }

    public function employees()
    {
        return view('site.employees');
    }
}

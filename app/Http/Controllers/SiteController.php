<?php

namespace App\Http\Controllers;

use App\View\Components\Galery\video;
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

    public function galleryPhoto()
    {
        return view('site.galleryPhoto');
    }


    public function employees()
    {
        return view('site.employees');
    }

    public function notification()
    {
       return view('site.notification'); 
    }
    
    public function consultation()
    {
       return view('site.consultation'); 
    }

    public function meals()
    {
       return view('site.meals'); 
    }

    public function pedagogicalSupport()
    {
       return view('site.pedagogical-support'); 
    }



}

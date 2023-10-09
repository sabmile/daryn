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
        $videos = [
	        'VIDEO-2023-10-03-08-31-37 (1)',
	        'VIDEO-2023-10-03-08-31-37',
        ];
        return view('site.galeryVideo', compact('videos'));
    }

    public function employees()
    {
        return view('site.employees');
    }

    public function videos()
    {
        $videos = ['adf', 'adsf'];
        return view('site.videos', compact('videos'));
    }
}

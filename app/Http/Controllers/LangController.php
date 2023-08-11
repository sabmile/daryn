<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;


class LangController extends Controller
{
    public function index()
    {
        return view('lang.index');
    }

    public function change(Request $request) 
    { 
        App::setLocale($request->lang); 
        session()->put('locale', $request->lang);
     
        return redirect()->back(); 
    }

    public function setLocale(string $lang)
    {
        App::setLocale($lang); 
        session()->put('locale', $lang);
     
        return redirect()->back(); 
    }

}

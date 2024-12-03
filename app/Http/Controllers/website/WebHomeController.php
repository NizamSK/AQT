<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebHomeController extends Controller
{
    public function home()
    {
        return view('website.index');
    }
    public function apply()
    {
        return view('website.apply');
    }
    public function movies()
    {
        return view('website.movies');
    }
    public function series()
    {
        return view('website.series');
    }
    public function about()
    {
        return view('website.about');
    }
    public function contact()
    {
        return view('website.contact');
    }
}

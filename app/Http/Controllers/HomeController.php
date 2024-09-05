<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function project()
    {
        return view('frontend.project');
    }

    public function blog()
    {
        return view('frontend.blog');
    }

    public function service()
    {
        return view('frontend.service');
    }

    public function team()
    {
        return view('frontend.team');
    }
}

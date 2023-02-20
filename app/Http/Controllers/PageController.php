<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function skills()
    {
        return view('skills');
    }

    public function services()
    {
        return view('services');
    }


    public function portfolio()
    {
        return view('portfolio');
    }

    public function testimonial()
    {
        return view('testimonial');
    }

    public function contact()
    {
        return view('contact');
    }
}
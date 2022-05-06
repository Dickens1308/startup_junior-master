<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('pages.abouts');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function service()
    {
        return view('pages.service');
    }

    public function blog()
    {
        return view('pages.blogs');
    }
}

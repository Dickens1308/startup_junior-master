<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }

    public  function index()
    {
        return view('admin.dashboard');
    }


    public function mentors()
    {
        return view('admin.pages.mentors');
    }




    public function logout()
    {
        return view('/');
    }
}

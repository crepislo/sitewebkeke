<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function services()
    {
        return view('services');
    }

    public function apropos()
    {
        return view('apropos');
    }

    
}

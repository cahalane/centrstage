<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homepage()
    {
    	return view('pages.homepage');
    }

    public function about()
    {
    	return view('pages.about');
    }

    public function howItWorks()
    {
    	return view('pages.how-it-works');
    }

    public function signup()
    {
    	return view('pages.signup');
    }

    public function contact()
    {
    	return view('pages.contact');
    }
}

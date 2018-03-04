<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function home()
    {
       $people = ['Alexis Sanchez','Ozil','Mustafi'];
       return view('welcome')->with('people',$people);
    }

    public function about()
    {
    	return view('about');
    }
}

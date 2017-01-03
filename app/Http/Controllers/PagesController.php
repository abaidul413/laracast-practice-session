<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home()
    {
      $people = ['Prety', 'jafry', 'Taylor'];
      return view('welcome', compact('people'));
    }

    public function about()
    {
    	return view('about');
    }
}

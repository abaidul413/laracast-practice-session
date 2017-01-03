<?php

namespace App\Http\Controllers;


class CardsController extends Controller
{
    public function index()
    {
    	return view('cards/index');
    }
}

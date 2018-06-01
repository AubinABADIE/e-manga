<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Volume;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $recent = Volume::
      return view('home', compact('recent'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('content.index');
    }
    public function team()
    {
        return view('content.team');
    }
    public function doc()
    {
        return view('content.team');
    }
    public function topics()
    {
        return view('content.topic');
    }
}

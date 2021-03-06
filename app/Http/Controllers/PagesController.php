<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
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
     * Welcome Page
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * About Page
     */
    public function about()
    {
        return view('about');
    }
}

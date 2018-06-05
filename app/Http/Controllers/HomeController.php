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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function dashboard()
    {
        return view('back.index');
    }
    public function formati(Request $Request)
    {
        $id = $Request->id; 
        //lmohim akhay hanbdaw ninsiriw f la table 3adi 
 
        return view('back.index');
    }

}

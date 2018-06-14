<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class DashboardController extends Controller
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
        if(  Auth::user()->role_id != 1){
            return redirect()->route('home');
        }
        return view('back.index');
    }


}

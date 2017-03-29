<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebsiteController extends Controller
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
    public function add_new(Request $request)
    {
        $form_data = $request->all();
        print_r($form_data);
        // echo "<pre>";
        // print_r(Auth::user());
        // echo Auth::user()->name;
    }
}

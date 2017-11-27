<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.home');
    }

    public function courses()
    {
        return view('site.courses_home');
    }
    public function courseCoder()
    {
        return view('site.course_coder');
    }

    public function calendar()
    {
        return view('site.calendar');
    }
    public function eMagazine()
    {
        return view('site.emagazine');
    }
    public function faqs()
    {
        return view('site.faqs');
    }
}

<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

use App\HelperUtil;
use Config;
use Validator;
use Illuminate\Support\Collection;

use Mail;
use Illuminate\Contracts\Encryption\DecryptException;
class CoursesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $helperUtil;
    public function __construct()
    {
        // $this->middleware('guest');
        $this->helperUtil = new HelperUtil;
    }

    public function index()
    {
        return view('course.index');
    }

}

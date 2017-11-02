<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

use App\HelperUtil;
use Config;
use Validator;

use Mail;
class GalleryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $helperUtil;
    public function __construct()
    {
        $this->middleware('auth');
        $this->helperUtil = new HelperUtil;
    }

    public function index()
    {
        return view('gallery.index');
    }
}

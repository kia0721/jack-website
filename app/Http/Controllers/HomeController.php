<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HelperUtil;
use Config;
use Illuminate\Support\Facades\Log;
use Validator;

class HomeController extends Controller
{
    private $helperUtil;
    public function __construct()
    {
       
        $this->helperUtil = new HelperUtil;
    }

    public function index()
    {
        return view('site.home');
    }

    public function courses()
    {
        return view('site.courses_home');
    }
    public function summer()
    {
        return view('site.summer');
    }
    public function junior()
    {
        return view('site.junior');
    }

    public function master()
    {
        return view('site.master');
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
    public function gallery()
    {
        return view('site.gallery');
    }
    public function register()
    {
        return view('site.register');
    }

    public function contactUs(Request $request)
    {
        $data = $request->only('fullname', 'email', 'contactNum', 'email',  'message_detail', 'RegisterCaptcha');
        $rules = [
            'fullname' => 'required|max:255',
            'email' => 'required|max:255',
            'contactNum' => 'sometimes|max:255',
            'message_detail' => 'required'
            // 'RegisterCaptcha' => 'required|valid_captcha'
        ];

        $isHuman = captcha_validate($data['RegisterCaptcha']);

        Log::info("rules ".json_encode($rules));
        $validator = Validator::make($data, $rules);

        if($validator->fails()) {
            return $this->helperUtil->resultToJSON($validator->errors()->all(), Config::get('constants.SC_ERR_VALIDATION'), 0, false);   
        } else if ($isHuman == false) {
            return $this->helperUtil->resultToJSON("Invalid code", Config::get('constants.SC_ERR_VALIDATION'), 0, false);   
        }

        return $this->helperUtil->resultToJSON("No validation error encountered", Config::get('constants.SC_SUCCESS'), 0, true);  
        
    }
}

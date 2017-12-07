<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HelperUtil;
use Config;
use Illuminate\Support\Facades\Log;
use Validator;
use Illuminate\Support\Facades\DB;

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
        $courses = DB::table('jack_course as jc')
            ->where('jc.status', '=', false)
            ->get();
        return view('site.register')
                ->with('courses', $courses);
    }

    public function registerStudent(Request $request){
        $studentDetail = new \App\Models\JackStudentDetail;
        $studentDetail->firstname = $input['firstname'];
        $studentDetail->lastname = $input['lastname'];
        $studentDetail->school = $input['school'];
        $studentDetail->birthdate = $input['birthdate'];
        $studentDetail->age = $input['age'];
        $studentDetail->codingBackground = $input['codingBackground'];
        $studentDetail->parentName = $input['parentName'];
        $studentDetail->parentContactNum = $input['parentContactNum'];
        $studentDetail->completeAddress = $input['completeAddress'];
        $studentDetail->findjack = $input['findjack'];
        $studentDetail->allowPhotograph = $input['allowPhotograph'];
        $studentDetail->save();


        $jackStudentCourse = new \App\Models\JackStudentCourse;
        $jackStudentCourse->studentID = $studentDetail->id;
        $jackStudentCourse->course = $input['course'];
        $jackStudentCourse->level = $input['level'];
        $jackStudentCourse->courseSchedule = $input['courseSchedule'];
        $jackStudentCourse->mobileDevelopment = $input['mobileDevelopment'];
        $jackStudentCourse->save();

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

    public function downloadCalendar(){
        return response()->download(Config::get('constants.CALENDAR_PATH'), "JACK CALENDAR 2018.pdf");
    }
}

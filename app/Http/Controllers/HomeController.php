<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HelperUtil;
use Config;
use Illuminate\Support\Facades\Log;
use Validator;
use Illuminate\Support\Facades\DB;
use Mail;
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
            ->leftJoin('jack_courseschedule as jcs', 'jcs.course', '=', 'jc.id')
            ->leftJoin('jack_courselevel as jcl', 'jcs.level', '=', 'jcl.id')
            ->where('jc.status', '=', false)
            ->where('jcs.status', '=', false)
            ->orderBy('jcs.course', 'asc')
            ->orderBy('jcs.level', 'asc')
            ->get(['jc.id', 'jc.courseTitle', 'jc.courseType', 'jc.mobileDev', 'jcs.id as courseScheduleId', 'jcs.startDate', 'jcs.endDate', 'jcs.coderDate', 'jcl.id as levelId', 'jcl.courseLevel']);
        return view('site.register')
                ->with('courses', $courses);
    }

    public function registerStudent(Request $request){

        $input = $request->only('firstname', 'lastname', 'school', 'birthdate', 'age', 'codingBackground', 'parentName', 'parentContactNum',
            'completeAddress', 'findjack', 'allowPhotograph', 'courses' );
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

        return $this->helperUtil->resultToJSON("Successfully registered.", Config::get('constants.SC_SUCCESS'), 0, true);  
    }

    public function contactUs(Request $request)
    {
        $mailData = $request->only('fullname', 'email', 'contactNum', 'email',  'message_detail', 'RegisterCaptcha');
        $rules = [
            'fullname' => 'required|max:255',
            'email' => 'required|max:255',
            'contactNum' => 'sometimes|max:255',
            'message_detail' => 'required'
            // 'RegisterCaptcha' => 'required|valid_captcha'
        ];

        $isHuman = captcha_validate($mailData['RegisterCaptcha']);

        Log::info("Contact-us details: ".json_encode($mailData));
        $validator = Validator::make($mailData, $rules);

        if($validator->fails()) {
            return $this->helperUtil->resultToJSON($validator->errors()->all(), Config::get('constants.SC_ERR_VALIDATION'), 0, false);   
        } else if ($isHuman == false) {
            return $this->helperUtil->resultToJSON("Invalid code", Config::get('constants.SC_ERR_VALIDATION'), 0, false);   
        }

        $mailData['date'] = date("F d, Y h:i A");
        Mail::send(['html'=>'mail.contact-us'], $mailData, function ($message) use ($mailData) {

            $message->from(Config::get('constants.FROM_EMAIL'), Config::get('constants.APP_NAME'));

            $message->to(Config::get('constants.TO_FEEDBACK_EMAIL'))->subject(Config::get('constants.CONTACT_US_TITLE'));

        });
        if(count(Mail::failures()) > 0){
            return $helperUtil->resultToJSON("Error", Config::get('constants.SC_UXP_ERR'), 0, false);  
        }

        return $this->helperUtil->resultToJSON("No validation error encountered", Config::get('constants.SC_SUCCESS'), 0, true);  
        
    }

    public function downloadCalendar(){
        return response()->download(Config::get('constants.CALENDAR_PATH'), "JACK CALENDAR 2018.pdf");
    }
}

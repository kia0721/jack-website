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

    public function index(Request $require)
    {
        if($this->helperUtil->isMobileDevice($require)){
            return view('mobile.home');
        }
        return view('site.home');
    }

    public function courses(Request $require)
    {
        if($this->helperUtil->isMobileDevice($require)){
            return view('mobile.courses_home');
        }
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

    public function calendar(Request $require)
    {
        if($this->helperUtil->isMobileDevice($require)){
            return view('mobile.calendar');
        }
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
    public function register(Request $require)
    {
        $courses = DB::table('jack_course as jc')
            ->leftJoin('jack_courseSchedule as jcs', 'jcs.course', '=', 'jc.id')
            ->leftJoin('jack_courseLevel as jcl', 'jcs.level', '=', 'jcl.id')
            ->where('jc.status', '=', false)
            ->where('jcs.status', '=', false)
            ->orderBy('jcs.course', 'asc')
            ->orderBy('jcs.level', 'asc')
            ->get(['jc.id', 'jc.courseTitle', 'jc.courseType', 'jc.mobileDev', 'jcs.id as courseScheduleId', 'jcs.startDate', 'jcs.endDate', 'jcs.coderDate', 'jcl.id as levelId', 'jcl.courseLevel']);

        if($this->helperUtil->isMobileDevice($require)){
            return view('mobile.register')
                ->with('courses', $courses);
        }

        return view('site.register')
                ->with('courses', $courses);
    }

    public function registerStudent(Request $request){

        $input = $request->only('studGivenName', 'studLastName', 'school', 'birthdate', 'age', 'codingBackground', 'parentName', 'parentEmail', 'parentContactNum',
            'completeAddress', 'findjack', 'allowPhotograph', 'courseSelected' );
        $studentDetail = new \App\Models\JackStudentDetail;
        $studentDetail->firstname = $input['studGivenName'];
        $studentDetail->lastname = $input['studLastName'];
        $studentDetail->school = $input['school'];
        $studentDetail->birthdate = $input['birthdate'];
        $studentDetail->age = $input['age'];
        $studentDetail->codingBackground = $input['codingBackground'];
        $studentDetail->parentName = $input['parentName'];
        $studentDetail->parentContactNum = $input['parentContactNum'];
        $studentDetail->completeAddress = $input['completeAddress'];
        $studentDetail->findjack = $input['findjack'];
        $studentDetail->allowPhotograph = $input['allowPhotograph'];
        $studentDetail->parentEmail = $input['parentEmail'];
        $studentDetail->save();

        $courseSelected = json_decode($input['courseSelected'], true);

        Log::info($courseSelected);

        for($x=0; $x<count($courseSelected); $x++){
            $jackStudentCourse = new \App\Models\JackStudentCourse;
            $jackStudentCourse->studentID = $studentDetail->id;
            $jackStudentCourse->course = $courseSelected[$x]['id'];
            $levelId = $courseSelected[$x]['levelId'];
            if(is_numeric($levelId)){
                $jackStudentCourse->level = $levelId;
            }
            else{
                $jackStudentCourse->mobileDevelopment = $levelId;
            }

            $jackStudentCourse->courseSchedule = $courseSelected[$x]['scheduleId'];
            
            $jackStudentCourse->save();
        }
        

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


    public function mobiIndex()
    {
        return view('mobile.home');
    }

}

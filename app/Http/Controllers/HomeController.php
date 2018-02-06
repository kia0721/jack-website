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
        if($this->helperUtil->isMobileDevice($require, false)){
            return view('mobile.home')
        ->with('titlePage', '- Home');
        }
        return view('site.home')
        ->with('titlePage', '- Home');
    }

    public function courses(Request $require)
    {
        if($this->helperUtil->isMobileDevice($require, false)){
            return view('mobile.courses_home')
            ->with('titlePage', '- Courses');
        }
        return view('site.courses_home')
            ->with('titlePage', '- Courses');
    }
    public function summer()
    {
        return view('site.summer')
            ->with('titlePage', '- Summer');
    }
    public function junior()
    {
        return view('site.junior')
            ->with('titlePage', '- Junior');
    }

    public function master()
    {
        return view('site.master')
            ->with('titlePage', '- Master');
    }

    public function calendar(Request $require)
    {
        if($this->helperUtil->isMobileDevice($require, false)){
            return view('mobile.calendar')
            ->with('titlePage', '- Calendar');
        }
        return view('site.calendar')
            ->with('titlePage', '- Calendar');
    }
    public function eMagazine(Request $require)
    {
        if($this->helperUtil->isMobileDevice($require, false)){
            return view('mobile.emagazine')
            ->with('titlePage', '- Emagazine');
        }
        return view('site.emagazine')
            ->with('titlePage', '- Emagazine');
    }
    public function faqs(Request $require)
    {
        if($this->helperUtil->isMobileDevice($require, false)){
            return view('mobile.faqs')
                ->with('titlePage', '- FAQs');
        }
        return view('site.faqs')
            ->with('titlePage', '- FAQs');
    }
    public function gallery(Request $require)
    {
        $images = DB::table('gallery_image as gi')
            ->orderBy('gi.id', 'desc')
            ->get();
        if($this->helperUtil->isMobileDevice($require, false)){
            return view('mobile.gallery')
                ->with('images', $images)
                ->with('titlePage', '- Gallery');
        }
        return view('site.gallery')
                ->with('images', $images)
                ->with('titlePage', '- Gallery');
    }
    public function register(Request $require)
    {
        $courses = DB::table('jack_course as jc')
            ->leftJoin('jack_courseSchedule as jcs', 'jcs.course', '=', 'jc.id')
            ->leftJoin('jack_courseLevel as jcl', 'jcs.level', '=', 'jcl.id')
            ->leftJoin('jack_class as jclass', 'jc.courseType', '=', 'jclass.id')
            ->where('jc.status', '=', false)
            ->where('jcs.status', '=', false)
            ->orderBy('jc.courseType', 'asc')
            ->orderBy('jcs.course', 'asc')
            ->orderBy('jcs.level', 'asc')
            ->get(['jc.id', 'jc.courseTitle', 'jc.courseType', 'jclass.class', 'jc.mobileDev', 'jcs.id as courseScheduleId', 'jcs.startDate', 'jcs.endDate', 'jcs.coderDate', 'jcs.strDate', 'jcl.id as levelId', 'jcl.courseLevel']);

            Log::info($courses);
        if($this->helperUtil->isMobileDevice($require, false)){
            return view('mobile.register')
                ->with('courses', $courses)
                ->with('titlePage', '- Register');
        }

        return view('site.register')
                ->with('courses', $courses)
                ->with('titlePage', '- Register');
    }

    public function registerStudent(Request $request){

        $input = $request->only('studGivenName', 'studLastName', 'school', 'birthdate', 'age', 'codingBackground', 'parentName', 'parentEmail', 'parentContactNum', 'gradeLevel', 'relationship', 'promo_code',
            'completeAddress', 'findjack', 'allowPhotograph', 'courseSelected' );
        Log::info($input['promo_code']);
        $studentDetail = new \App\Models\JackStudentDetail;
        $studentDetail->firstname = $input['studGivenName'];
        $studentDetail->lastname = $input['studLastName'];
        $studentDetail->school = $input['school'];
        $studentDetail->birthdate = $input['birthdate'];
        $studentDetail->age = $input['age'];
        $studentDetail->gradeLevel = $input['gradeLevel'];
        $studentDetail->relationship = $input['relationship'];
        $studentDetail->codingBackground = $input['codingBackground'];
        $studentDetail->parentName = $input['parentName'];
        $studentDetail->parentContactNum = $input['parentContactNum'];
        $studentDetail->completeAddress = $input['completeAddress'];
        $studentDetail->findjack = $input['findjack'];
        $studentDetail->allowPhotograph = $input['allowPhotograph'];
        $studentDetail->parentEmail = $input['parentEmail'];
        $studentDetail->promo_code = $input['promo_code'];
        $studentDetail->save();

        $courseSelected = json_decode($input['courseSelected'], true);

        Log::info($courseSelected);
        $courseSelectedList = [];
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

            $courseSchedule = DB::table('jack_courseSchedule as jcs')
            ->leftJoin('jack_course as course', 'course.id', '=', 'jcs.course')
            ->where('jcs.id', '=', $courseSelected[$x]['scheduleId'])
            ->first(['jcs.strDate', 'jcs.startTime', 'jcs.endTime', 'course.courseTitle', 'course.fee']);
            array_push($courseSelectedList, $courseSchedule);
        }
        $mailData = $input;
        // $mailData['parentEmail'] = Config::get('constants.TO_REGISTRATION_EMAIL');
        // array_push($mailData['parentEmail'], $input['parentEmail']);
        Log::info($mailData['parentEmail']);
        $mailData['date'] = date("F d, Y h:i A");
        $mailData['courseSelectedList'] = $courseSelectedList;
        Mail::send(['html'=>'mail.registered-mail'], $mailData, function ($message) use ($mailData) {

            $message->from(Config::get('constants.FROM_EMAIL'), Config::get('constants.APP_NAME'));

            $message->to($mailData['parentEmail'])->subject('JACK Registration Confirmation');
            $message->bcc(Config::get('constants.TO_REGISTRATION_EMAIL'))->subject('JACK Registration Confirmation');

        });
        if(count(Mail::failures()) > 0){
            return $helperUtil->resultToJSON("Error", Config::get('constants.SC_UXP_ERR'), 0, false);  
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

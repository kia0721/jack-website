<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\HelperUtil;
use Illuminate\Support\Facades\DB;

use Mail;
use Config;
use Validator;
class RegisterController extends Controller
{
    private $helperUtil;
    public function __construct()
    {
       
        $this->helperUtil = new HelperUtil;
    }

    public function forgotStudentId(Request $request){

    	$input = $request->only('forgotEmail', 'g-recaptcha-response');

        $validator = Validator::make($input, [
            // 'g-recaptcha-response' => 'required|captcha',
            'forgotEmail' => 'required|email'
        ],
         [
            // 'g-recaptcha-response.required' => 'Please verify if you\'re not a robot',
            'forgotEmail.required' => 'Email is required'

        ]);

        if($validator->fails()) {
            return $this->helperUtil->resultToJSON($validator->errors()->first(), "ERROR", 0, false);   
        }
        
        $result = DB::table('jack_studentdetails')
            ->where('emailAddress', '=', $input['forgotEmail'])
            ->get();


        if(count($result) == 0){
            return $this->helperUtil->resultToJSON("This email is not recognized to our system. Please contact adminitstrator or call (02) 636 7499 loc. 887. ", Config::get('constant.SC_ERR_VALIDATION'), 0, false);
        }
        
        $mailData = [];
        $mailData['title'] = "JACK Student";
        $mailData['result'] = $result;

        Mail::send(['html'=>'mail.forgot-student'], $mailData, function ($message) use ($mailData) {

            $message->from(Config::get('constant.FROM_EMAIL'), Config::get('constant.APP_NAME'));
            $emailRes = $mailData['result'];
            $email = $emailRes[0]->emailAddress;

            $message->to($email)->subject('JACK Student Information');
        });

        if(count(Mail::failures()) > 0){
            return $helperUtil->resultToJSON("Error sending email. Please try again later.", Config::get('constant.SC_UXP_ERR'), 0, false);  
        }

        return $this->helperUtil->resultToJSON("Please check your email.", Config::get('constant.SC_SUCCESS'), 0, true);
    }

    public function registerStudent(Request $request){
        $input = $request->only('registerAction');


        if($input['registerAction'] == "Old"){
            return $this->registerOldStudent($request);

        } elseif($input['registerAction'] == "New") {
            return $this->registerNewStudent($request);
        }

    }

    public function registerOldStudent($request){
         $input = $request->only('studentId', 'g-recaptcha-response', 'schedules');

          $validator = Validator::make($input, [
            'g-recaptcha-response' => 'required|captcha',
            'studentId' => 'required',
            'schedules' => 'required'

        ], [
            'g-recaptcha-response.required' => 'Please verify if you\'re not a robot'
        ]);
          
        if($validator->fails()) {
            return $this->helperUtil->resultToJSON($validator->errors()->first(), "ERROR", 0, false);   
        }
        $studentDetail = \App\Models\JackStudentDetail::where('student_id', '=', $input['studentId'])
        ->first();

        $schedResult = [];
        if($studentDetail == null){
            return $this->helperUtil->resultToJSON("Invalid student id.", "ERROR", 0, false);   
        }
        $schedResult = $this->insertStudentCourses($input['schedules'], $studentDetail->id);
    //
        if(!$schedResult['isSuccessful']){
            return $schedResult;
        }
        

        $resultRegistration = $this->sendRegistrationConfirmationEmail($studentDetail, $schedResult['result']);

        if($resultRegistration['isSuccessful']){
            $request->session()->put('cart', []);
            $request->session()->put('studentInfo', null);

        }

        return $resultRegistration;

    }

    private function registerNewStudent($request){
         $input = $request->only('studGivenName', 'studLastName', 'school', 'birthdate', 'studentBackground', 'contactPerson', 'parentEmail', 'parentContactNum', 'gradeLevel', 'relationship', 'promo_code', 'findJackVal', 'referByVal', 'completeAddress', 'allowPhotographVal', 'agreeNewStudent', 'studentId', 'g-recaptcha-response', 'schedules', 'age');

        $validator = Validator::make($input, [
            'g-recaptcha-response' => 'required|captcha',
            'studGivenName' => 'required',
            'studLastName' => 'required',
            'school' => 'required',
            'birthdate' => 'required',
            'studentBackground' => 'required',
            'contactPerson' => 'required',
            'parentEmail' => 'required',
            'parentContactNum' => 'required',
            'gradeLevel' => 'required',
            'age' => 'required',
            'completeAddress' => 'required',
            'relationship' => 'required',
            'schedules' => 'required',
            'findJackVal' => 'required'
        ],
         [
            'g-recaptcha-response.required' => 'Please verify if you\'re not a robot',
            'parentEmail.required' => 'Email is required'

        ]);

        if($validator->fails()) {
            return $this->helperUtil->resultToJSON($validator->errors()->first(), "ERROR", 0, false);   
        }

        $currentStudent = \App\Models\JackStudentDetail::where('firstname', 'like', '%'.$input['studGivenName'].'%')
        ->where('lastname', 'like', '%'.$input['studLastName'].'%')
        ->where('parentEmail', 'like', '%'.$input['parentEmail'].'%')
        ->first();

        $request->session()->put('studentInfo', $input);
       


        if($currentStudent != null){
            return $this->helperUtil->resultToJSON("We detected you have registered before, please register again as old student.", "ERROR", 0, false);   
        }

        $studentDetail = new \App\Models\JackStudentDetail;
        $studentDetail->student_id = $this->generateStudentId();
        $studentDetail->firstname = $input['studGivenName'];
        $studentDetail->lastname = $input['studLastName'];
        $studentDetail->school = $input['school'];
        $studentDetail->birthdate = $input['birthdate'];
        $studentDetail->age = $input['age'];
        $studentDetail->gradeLevel = $input['gradeLevel'];
        $studentDetail->relationship = $input['relationship'];
        $studentDetail->codingBackground = $input['studentBackground'];
        $studentDetail->parentName = $input['contactPerson'];
        $studentDetail->parentEmail = $input['parentEmail'];
        $studentDetail->emailAddress = $input['parentEmail'];
        $studentDetail->parentContactNum = $input['parentContactNum'];
        $studentDetail->completeAddress = $input['completeAddress'];
        $studentDetail->findjack = $input['findJackVal'];
        $studentDetail->referredBy = $input['referByVal'];
        $studentDetail->allowPhotograph = $input['allowPhotographVal'];
        $studentDetail->studentStatus = 1;
        // $studentDetail->promo_code = $input['promo_code'];

        $studentDetail->save();

        $schedResult = $this->insertStudentCourses($input['schedules'], $studentDetail->id);
        //
        if(!$schedResult['isSuccessful']){
            return $schedResult;
        }

        

        $result = $this->sendRegistrationConfirmationEmail($studentDetail, $schedResult['result']);

        if($result['isSuccessful']){
            $request->session()->put('cart', []);
            $request->session()->put('studentInfo', null);

        }


        return $result;

    }

    private function sendRegistrationConfirmationEmail($studentDetail, $scheds){

        $mailData = [];
        $mailData['emailAddress'] = $studentDetail->emailAddress;
        $mailData['parentName'] = $studentDetail->parentName;
        $mailData['studentId'] = $studentDetail->student_id;
        $mailData['studentName'] = $studentDetail->firstname." ".$studentDetail->lastname;
        $mailData['courses'] = $scheds;

        Mail::send(['html'=>'mail.register-student'], $mailData, function ($message) use ($mailData) {

            $message->from(Config::get('constant.FROM_EMAIL'), Config::get('constant.APP_NAME'));
         
            $email = $mailData['emailAddress'];

            $message->to($email)->subject('JACK Student Information');
        });

        if(count(Mail::failures()) > 0){
            return $this->helperUtil->resultToJSON("Error sending email. Please try contact adminitstrator for details.", Config::get('constant.SC_UXP_ERR'), 0, false);  
        }

        

        return $this->helperUtil->resultToJSON("Thank you! Kindly check your email for confirmation.", Config::get('constant.SC_SUCCESS'), 0, true);  
    }


    private function insertStudentCourses($selectedSched, $studentId){
        $courseData = [];

        $courses = explode(",", $selectedSched);
        for($x=0; $x<count($courses); $x++){
            $sched = DB::table('jack_courseschedule as jcs')
            ->leftJoin('jack_course as jc', 'jc.id', '=', 'jcs.course')
            ->where('jcs.id','=', $courses[$x])
            ->where('jcs.endDate', '>=', date('y-m-d'))
            ->first();

            if($sched == null){
                return $this->helperUtil->resultToJSON("One of the courses has been closed. Please contact Jack directly for special enrollment", Config::get('constant.SC_ERR_VALIDATION'), 0, false);  
            }

            array_push($courseData, $sched);

        }

        for($x=0; $x<count($courses); $x++){

            $studentCourse = new \App\Models\StudentCourse;
            $studentCourse->studentID = $studentId;
            $studentCourse->courseSchedule = $courses[$x];
            $studentCourse->paymentStatus = "Unpaid";

            $studentCourse->save();
        }

        return $this->helperUtil->resultToJSON($courseData, Config::get('constant.SC_SUCCESS'), 0, true);  
    }

    private function generateStudentId(){
        $year = date("Y");
        $month = date('m');

        $students = \App\Models\JackStudentDetail::whereYear('dateRegistered', '=', $year)
        ->get();


        $id = count($students) + 1;

        $generatedId = "0";
        if($id >= 10){
            $generatedId = $generatedId.$id.'-'.$month.'-'.$year;
        } else {
            $generatedId = $generatedId.'0'.$id.'-'.$month.'-'.$year;
        }

        return $generatedId;
    }

}
<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

use App\HelperUtil;
use Config;
use Validator;

use Mail;
class SurveyController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function surveysView()
    {
        $result = DB::table('surveys as su')
        ->leftJoin('users as user', 'user.id', '=', 'su.created_by')
        ->where('su.is_deleted', '=', false)
        ->get(['su.id as id', 'su.title', 'su.created_at', 'user.firstname as created_fname', 'user.lastname as created_lname']);
        return view('survey.list')->with('surveys', $result);
    }
    public function createView()
    {
        return view('survey.create');
    }

    public function answerSurveyView()
    {
        return view('customer.survey');
    }

    public function surveyDetailView($surveyId)
    {
        $result = DB::table('surveys as su')
        ->where('su.is_deleted', '=', false)
        ->where('su.id', '=', $surveyId)
        ->first();

        $questions = DB::table('survey_questions as sq')
        ->leftJoin('survey_types as st', 'st.id', '=', 'sq.survey_type_id')
        ->where('sq.is_deleted', '=', false)
        ->where('sq.is_active', '=', true)
        ->where('sq.survey_id', '=', $surveyId)
        ->orderBy('sq.ques_num', 'asc')
        ->get(['sq.id as survey_question_id', 'sq.question', 'st.description as survey_type', 'sq.ques_num']);

        $sentList = DB::table("sent_survey_logs as ssl")
        ->leftJoin('surveys as sur', 'sur.id', '=', 'ssl.survey_id')
        ->where('ssl.survey_id', '=', $surveyId)
        ->where('ssl.is_deleted', '=', false)
        ->get(['ssl.id as sent_survey_id', 'ssl.fullname', 'ssl.department', 'ssl.company', 'ssl.email', 'sur.title as survey_title', 'ssl.is_sent', 'ssl.is_answered']);

        $answerList = DB::table('ques_ans_logs as qal')
        ->leftJoin("survey_questions as sq", 'sq.id', '=', 'qal.survey_question_id')
        ->leftJoin("survey_choices as sc", "sc.id", "=", "qal.survey_choice_id")
        ->select(
                'qal.survey_question_id',  'qal.survey_choice_id', 'sc.value', 'sc.description', 'sq.ques_num',
                DB::raw("count(qal.survey_question_id) as count_ques_id"))
        ->groupBy('qal.survey_question_id', 'sq.ques_num', 'qal.survey_choice_id', 'sc.value', 'sc.description')
        ->where('sq.survey_id', '=', $surveyId)
        ->orderBy('ques_num', 'asc')
        ->orderBy('value', 'desc')
        ->get();

        return view('survey.detail')
        ->with('detail', $result)
        ->with('questions', $questions)
        ->with('sentList', $sentList)
        ->with('answerList', $answerList);
    }


    public function createSurvey(Request $request){

        Log::info('createSurvey ');

        $input = $request->only('title', 'message');

        $survey = new \App\Models\Survey;
        $survey->title = $input['title'];
        $survey->message = $input['message'];
        $survey->created_by = \Auth::user()->id;
        $survey->is_active = 1;
        $survey->save();

        return $this->helperUtil->resultToJSON("Succssfully created survey. Next Step: create questions.", Config::get('constants.SC_SUCESS'), $survey->id, true); 
    }

    public function updateSurvey(Request $request){

        // Log::info('updateSurvey ');

        $input = $request->only('title', 'message', 'surveyId');

        $survey = \App\Models\Survey::find($input['surveyId']);
        $survey->title = $input['title'];
        $survey->message = $input['message'];
        $survey->updated_by = \Auth::user()->id;
        $survey->is_active = 1;
        $survey->save();

        Log::info("UPDATE-admin survey id: ".$survey->id);

        return $this->helperUtil->resultToJSON("Succssfully updated survey.", Config::get('constants.SC_SUCESS'), $survey->id, true); 
    }

    public function addRecipient(Request $request){

        // Log::info('addRecipient ');
        $input = $request->only('surveyId', 'fullname', 'email', 'company');
        $sentSurvey = new \App\Models\SentSurveyLog;

        $sentSurvey->fullname = $input['fullname'];
        $sentSurvey->email = $input['email'];
        $sentSurvey->company = $input['company'];

        $sentSurvey->survey_id = $input['surveyId'];
        $sentSurvey->sent_by = \Auth::user()->id;
        $sentSurvey->is_sent = false;

        $sentSurvey->save();

        Log::info("UPDATE-admin addRecipient id: ".$sentSurvey->id);

        return $this->helperUtil->resultToJSON("Recipient saved. ", Config::get('constants.SC_SUCESS'), $sentSurvey->id, true);
    }

    public function deleteRecipient($id){

        $sentSurvey = \App\Models\SentSurveyLog::find($id);
        $sentSurvey->deleted_by = \Auth::user()->id;
        $sentSurvey->is_deleted = true;
        $sentSurvey->save();

        Log::info("UPDATE-admin deleteRecipient id: ".$id);
        return $this->helperUtil->resultToJSON("Recipient deleted. ", Config::get('constants.SC_SUCESS'), 0, true);

    }

    public function sendSurvey(Request $request){

        $input = $request->only('surveyId', 'recipients');
        $recipients = explode(",", $input['recipients']);

        //Log::info('sendSurvey '.$recipients);
        
        $resultList = "";
        for($x=0; $x<count($recipients); $x++){
            $sentSurvey = \App\Models\SentSurveyLog::find($recipients[$x]);
           

            $mailData = array(
                'fullname' => $sentSurvey->fullname,
                'email' => $sentSurvey->email,
                'surveyLink' => Config::get('constants.URL').'/answer/survey/'.$input['surveyId'].'/'.encrypt($sentSurvey->id)
            );

            try{
                Mail::send(['html'=>'mail.survey-link'], $mailData, function ($message) use ($mailData) {

                    $message->from(Config::get('constants.FROM_EMAIL'), 'SMS Global Technologies');
                    $message->to($mailData['email'])->subject("SMS Global Technologies - Customer Satisfaction Survey");

                });

                Log::info("UPDATE-admin is_sent id: ".$sentSurvey->id);

                $sentSurvey->sent_by = \Auth::user()->id;
                $sentSurvey->is_sent = true;

                $sentSurvey->save();
            }catch(\Exception $e){
                $result= array(
                    'email' => $sentSurvey->email,
                    'status' => 'Failed'
                );

               // array_push($resultList, $result);
                Log::info($sentSurvey->id. ' Failed send'. $sentSurvey->email);

                $resultList .= " Some email failed to send.";
            }
  
        }

        if($resultList == ""){
            $resultList = "Success";
        }

        return $this->helperUtil->resultToJSON($resultList, Config::get('constants.SC_SUCESS'), 0, true);
    }


}

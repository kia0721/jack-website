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
class CustomerController extends Controller
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

    public function surveySheetView($surveyId, $token)
    {
        
        $sentSurveyId;
        try {
            $sentSurveyId = decrypt($token);
        } catch (DecryptException $e) {
            return view('invalid.id-not-existing')
            ->with('url', '/');
        }
        
        Log::info("surveySheetView ".$surveyId." - ".$sentSurveyId);

        $result = $this->getSentSurveyLogBy($surveyId, $sentSurveyId);

        if($result == []){
            Log::info("surveySheetView INVALID ".$surveyId." - ".$sentSurveyId);
            return view('invalid.id-not-existing')
            ->with('url', '/');
        }

        if($result->is_answered){
            $categories = $this->getAnsweredSurvey($sentSurveyId);
            return view('customer.answered-survey')
            ->with('detail', $result)
            ->with('categories', $categories);
        }

        $questions = DB::table('survey_questions as sq')
        ->leftJoin('survey_categories as sur_category', 'sur_category.id', '=', 'sq.survey_category_id')
        ->where('sq.survey_id', '=', $surveyId)
        ->where('sq.is_active', '=', true)
        ->where('sq.is_deleted', '=', false)
        ->orderBy('sur_category.title', 'asc')
        ->orderBy('sq.ques_num', 'asc')
        ->get(['sq.id as sur_ques_id', 'sq.question', 'sur_category.title as category', 'sq.survey_type_id', 'sq.ques_num']);

        $ratingChoices = DB::table('survey_choices')
        ->where('survey_type_id', '=', Config::get('constants.SURVEY_TYPE_RATING'))
        ->get(['id', 'description']);

        //Log::info("questions ".$questions);
        //Log::info("ratingChoices ".$ratingChoices);
        Log::info("Get question and choices ".$surveyId." - ".$sentSurveyId);
        $questionsLength = count($questions)-1;

        $questionByCat = [];
        $questionList = [];

        $array = array('category' => 'initial', 'questions' => [ 'init'=>"test"]);
        $categoryQues =  collect($array);


        // Log::info(json_encode($categoryQues));

        $ctr = 0;
        $questionIdList = "";
        for($x=1; $x<=$questionsLength; $x++){
            $questionIdList .= $questions[$ctr]->sur_ques_id.",";
            $choice = [];

            $categoryQues['category'] = $questions[$ctr]->category;
            if($questions[$ctr]->survey_type_id == Config::get('constants.SURVEY_TYPE_RATING')){
                $choice = $ratingChoices ;
            }

            $question = (object) [
                    'question' => $questions[$ctr]->question,
                    'id' => $questions[$ctr]->sur_ques_id,
                    'choices' => $choice,
                    'num' => $questions[$ctr]->ques_num
                  ];

            array_push($questionList , $question );
            if($questions[$ctr]->category != $questions[$x]->category){

                //Log::debug("if ".$questions[$x]->category);
                $categoryQues['questions'] = $questionList ;

            
                array_push($questionByCat, $categoryQues);

                // $categoryQues['category'] = $questions[$ctr]->category;
                $questionList = null;
                $questionList = [];
                $array = array('category' => 'initial', 'questions' => [ 'init'=>"test" ], 'choice' => [ 'init'=>"test" ]);
                $categoryQues =  collect($array);
            }

            $ctr++;
        }
        
        $categoryQues['category'] = $questions[$ctr]->category;
        if($questions[$ctr]->survey_type_id == Config::get('constants.SURVEY_TYPE_RATING')){
            $choice = $ratingChoices ;
        }

        $questionIdList .= $questions[$ctr]->sur_ques_id;
        $question = (object) [
            'question' => $questions[$ctr]->question,
            'id' => $questions[$ctr]->sur_ques_id,
            'choices' => $choice,
            'num' => $questions[$ctr]->ques_num
          ];
        array_push($questionList , $question );

        $categoryQues['questions'] = $questionList ;

        array_push($questionByCat, $categoryQues);
        

        //Log::info(json_encode($questionByCat));
        Log::info("Display survey sheet ".$surveyId." - ".$sentSurveyId);
        

        return view('customer.survey')
        ->with('detail', $result)
        ->with('categories', $questionByCat)
        ->with('surveyId', $surveyId)
        ->with('customerToken', $token)
        ->with('questionIdList', $questionIdList);
      
    }

    protected function getSentSurveyLogBy($surveyId, $sentSurveyId){
        $result = DB::table('sent_survey_logs as ssl')
        ->leftJoin('surveys as sur', 'sur.id', '=', 'ssl.survey_id')
        ->where('ssl.survey_id', '=', $surveyId)
        ->where('ssl.id', '=', $sentSurveyId)
        ->where('ssl.is_deleted', '=', false)
        ->first(['ssl.id as sent_survey_id', 'ssl.fullname', 'ssl.designation', 'ssl.department', 'ssl.company', 'ssl.remarks', 'ssl.survey_id', 'ssl.is_answered', 'ssl.is_viewed', 'ssl.created_at', 'ssl.updated_at', 'sur.title', 'sur.message', 'sur.is_active']);

        return $result;
    }

    protected function getAnsweredSurvey($sentSurveyId){

        Log::info("getAnsweredSurvey ".$sentSurveyId);
        $questions = DB::table('ques_ans_logs as qal')
        ->leftJoin('survey_choices as schoi', 'schoi.id', '=', 'qal.survey_choice_id')
        ->leftJoin('survey_questions as sq', 'sq.id', '=', 'qal.survey_question_id')
        ->leftJoin('survey_categories as sur_category', 'sur_category.id', '=', 'sq.survey_category_id')
        ->where('qal.sent_survey_log_id', '=', $sentSurveyId)
        ->orderBy('sur_category.title', 'asc')
        ->orderBy('sq.ques_num', 'asc')
        ->get(['sq.id as sur_ques_id', 'sq.question', 'sur_category.title as category', 'sq.survey_type_id', 'sq.ques_num', 'qal.remarks', 'schoi.description as choice']);



        $questionsLength = count($questions)-1;

        $questionByCat = [];
        $questionList = [];

        $array = array('category' => 'initial', 'questions' => [ 'init'=>"test"]);
        $categoryQues =  collect($array);


        //Log::info(json_encode($categoryQues));

        $ctr = 0;
        $questionIdList = "";
        for($x=1; $x<=$questionsLength; $x++){
            $questionIdList .= $questions[$ctr]->sur_ques_id.",";
            $choice = [];

            $categoryQues['category'] = $questions[$ctr]->category;
            $question = (object) [
                    'question' => $questions[$ctr]->question,
                    'id' => $questions[$ctr]->sur_ques_id,
                    'choice' => $questions[$ctr]->choice,
                    'num' => $questions[$ctr]->ques_num,
                    'remarks' => $questions[$ctr]->remarks
                  ];

            array_push($questionList , $question );
            if($questions[$ctr]->category != $questions[$x]->category){

                //Log::info("if ".$questions[$x]->category);
                $categoryQues['questions'] = $questionList ;

            
                array_push($questionByCat, $categoryQues);

                $questionList = null;
                $questionList = [];
                $array = array('category' => 'initial', 'questions' => [ 'init'=>"test" ], 'choice' => [ 'init'=>"test" ]);
                $categoryQues =  collect($array);
            }

            $ctr++;
        }
        
        $categoryQues['category'] = $questions[$ctr]->category;
        $questionIdList .= $questions[$ctr]->sur_ques_id;
        $question = (object) [
            'question' => $questions[$ctr]->question,
            'id' => $questions[$ctr]->sur_ques_id,
            'choice' => $questions[$ctr]->choice,
            'num' => $questions[$ctr]->ques_num,
            'remarks' => $questions[$ctr]->remarks
          ];
        array_push($questionList , $question );

        $categoryQues['questions'] = $questionList ;

        array_push($questionByCat, $categoryQues);
        


        //Log::info($questionByCat);

        return $questionByCat;
    }


    public function submitSurvey(Request $request){
        $input = $request->all();

        $sentSurveyId;
        $surveyId = $input['surveyId'];
        Log::info("submitSurvey ".$surveyId. " ".json_encode($request->all()));

        $customerToken = $input['customerToken'];
        try {
            $sentSurveyId = decrypt($customerToken);
        } catch (DecryptException $e) {
            Log::info("submitSurvey invalid.id-not-existing".$customerToken);
            return view('invalid.id-not-existing')
            ->with('url', '/');
        }

        $questionIdList = $input['questionIdList'];
        $questionIdArr = explode(',', $questionIdList);
        $questionIdLength = count($questionIdArr);

        $sentSurveyLog = \App\Models\SentSurveyLog::find($sentSurveyId);

        if($sentSurveyLog->is_answered){
            return redirect('answer/survey/'.$surveyId.'/'.$customerToken);
        }

        // $sentSurveyLog->fullname = $input['fullname'];
        // $sentSurveyLog->designation = $input['designation'];
        // $sentSurveyLog->department = $input['department'];
        // $sentSurveyLog->company = $input['company'];
        $sentSurveyLog->is_answered = true;
        $sentSurveyLog->remarks = $input['additionalComments'];
        $sentSurveyLog->save();
        
        for($x=0; $x<$questionIdLength; $x++){
            $quesAnsLog = new \App\Models\QuesAnsLog;
            $quesAnsLog->sent_survey_log_id = $sentSurveyId;
            $quesAnsLog->survey_question_id = $questionIdArr[$x];
            $choiceAns = "choice-".$questionIdArr[$x];
            $remarkAns = "remarks-".$questionIdArr[$x];
            $quesAnsLog->survey_choice_id = $input[$choiceAns];
            $quesAnsLog->remarks = $input[$remarkAns];
            $quesAnsLog->save();
        }



        $mailData = array(
            'detail' => $this->getSentSurveyLogBy($surveyId, $sentSurveyId),
            'categories' => $this->getAnsweredSurvey($sentSurveyId)
        );

        
        Mail::send(['html'=>'mail.answered-survey'], $mailData, function ($message) use ($mailData) {

            $message->from(Config::get('constants.FROM_EMAIL'), 'SMS Global Technologies');

            $message->to(Config::get('constants.TO_FEEDBACK_EMAIL'))->subject("SMS Global Technologies - Customer Satisfaction Survey");

        });


        Log::info("mail.answered-survey submitSurvey ".$sentSurveyId);

        return redirect('answer/survey/'.$surveyId.'/'.$customerToken);
    }

}

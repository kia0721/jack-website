<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

use App\HelperUtil;
use Config;
use Validator;

use Mail;
class TestSurveyController extends Controller
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


    public function getIsSentId()
    {

        $ssls = DB::table('sent_survey_logs as ssl')
            ->select('ssl.is_sent', DB::raw('group_concat(ssl.id) as ids'))
            ->groupBy('ssl.is_sent')
            ->get();

        return $this->helperUtil->resultToJSON($ssls, Config::get('constants.SC_SUCESS'), 0, true); 
    }

    public function getIsDeletedId()
    {

        $ssls = DB::table('sent_survey_logs as ssl')
            ->select('ssl.is_deleted', DB::raw('group_concat(ssl.id) as ids'))
            ->groupBy('ssl.is_deleted')
            ->get();

        return $this->helperUtil->resultToJSON($ssls, Config::get('constants.SC_SUCESS'), 0, true); 
    }

    public function getIsAnsweredId()
    {

        $ssls = DB::table('sent_survey_logs as ssl')
            ->select('ssl.is_answered', DB::raw('group_concat(ssl.id) as ids'))
            ->groupBy('ssl.is_answered')
            ->get();

        return $this->helperUtil->resultToJSON($ssls, Config::get('constants.SC_SUCESS'), 0, true); 
    }




}

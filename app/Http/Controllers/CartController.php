<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\HelperUtil;
use Illuminate\Support\Facades\DB;
class CartController extends Controller
{
    private $helperUtil;
    public function __construct()
    {
       
        $this->helperUtil = new HelperUtil;
    }

    public function getCourseSchedule(Request $request){

    	$carts = $request->session()->get('cart');

        $courseIds = [];

        foreach ($carts as $courses) {
           array_push($courseIds, $courses->courseID);
        
        }

        $dateToday = date('y-m-d');
    	$courses = DB::table('jack_course as jc')
            ->leftJoin('jack_courseschedule as jcs', 'jcs.course', '=', 'jc.ID')
            ->leftJoin('jack_courselevel as jcl', 'jcs.level', '=', 'jcl.id')
            ->leftJoin('jack_class as jclass', 'jc.courseType', '=', 'jclass.id')
            ->where('jc.status', '=', '1')
            ->where('jcs.status', '=', '1')
            ->whereIn('jc.courseID', $courseIds)
            ->where(function ($query) use ($dateToday) {
                $query->where(function ($query2) use ($dateToday) {
                        $query2->where('jcs.startDate', '<=', $dateToday)
                        ->where('jcs.endDate', '>=', $dateToday);
                    })->orWhere(function ($query2) use ($dateToday){
                        $query2->where('jcs.startDate', '>=', $dateToday);
                    });
            })
            // ->where('jcs.startDate', '>=', $dateToday)
            // ->where('jcs.endDate', '>=', $dateToday)
            ->orderBy('jclass.num', 'asc')
            // ->orderBy('jc.courseType', 'asc')
            ->orderBy('jcs.course', 'asc')
            ->orderBy('jcs.strDate', 'asc')
            ->orderBy('jcs.level', 'asc')
            ->get(['jc.ID', 'jc.courseID', 'jc.courseTitle', 'jc.courseType', 'jc.icon', 'jclass.class', 'jc.mobileDev', 'jcs.id as courseScheduleId', 'jcs.startDate', 'jcs.endDate', 'jcs.coderDate', 'jcs.strDate', 'jcl.id as levelId', 'jcl.courseLevel']);


        return $courses;
    }
}
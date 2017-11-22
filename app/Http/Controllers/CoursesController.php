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
class CoursesController extends Controller
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

    public function index()
    {
        $courses = DB::table('jack_courses as jcs')
            ->leftJoin('jack_classes as jc', 'jc.id', '=', 'jcs.course_type')
            ->get(['jcs.id as course_id', 'jcs.course_title', 'jcs.course_description', 'jc.class as course_type', 'jcs.is_hidden', 'jcs.created_at']);


        return view('course.index')
                ->with('courses', $courses);
    }

    public function detailView($courseId)
    {
        $course = DB::table('jack_courses as jcs')
            ->leftJoin('jack_classes as jc', 'jc.id', '=', 'jcs.course_type')
            ->where('jcs.id', '=', $courseId)
            ->first(['jcs.id as course_id', 'jcs.course_title', 'jcs.course_description', 'jcs.course_type as course_type_id','jc.class as course_type', 'jcs.is_hidden', 'jcs.created_at']);

        $schedules = DB::table('jack_courseschedules as jcsched')
        ->leftJoin('jack_studentcourses as jstudent', 'jstudent.course_schedule', '=', 'jcsched.id')
        ->leftJoin('jack_courselevels as jcl', 'jcl.id', '=', 'jcsched.level_id')
        ->select('jcsched.id','jcsched.course_id', 'jcsched.level_id', 'jcsched.start_date', 'jcsched.end_date', 'jcsched.created_at', 'jcsched.coder_date', 'jcl.course_level',DB::raw("count(jcsched.id) as students"))
        ->where('jcsched.course_id', '=', $courseId)
        ->groupBy('jcsched.id')
        ->get();

        $courseLevels = DB::table('jack_courselevels as jcl')
        ->get();

        return view('course.detail')
                ->with('course', $course)
                ->with('schedules', $schedules)
                ->with('courseLevels', $courseLevels);
    }

    public function addSchedule(Request $request)
    {
        $data = $request->only('course_id', 'course_level', 'coder_date');

        $courseSchedule = new \App\Models\JackCourseSchedule;
        $courseSchedule->course_id = $data['course_id'];
        $courseSchedule->level_id = $data['course_level'];
        $courseSchedule->coder_date = $data['coder_date'];
        $courseSchedule->save();

        return $this->helperUtil->resultToJSON("Schedule successfully added.", Config::get('constants.SC_SUCESS'), $courseSchedule->id, true); 
    }
}

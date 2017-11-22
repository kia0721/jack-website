<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

use App\HelperUtil;
use Config;
use Validator;

use Mail;
class StudentController extends Controller
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

    public function index()
    {
        return view('student.index');
    }


    public function registerStudent(Request $request){
        $data = $request->only('lastname', 'firstname', 'school', 'grade_level', 'birthday', 'age', 'coding_bg', 'contac_person', 'relationship', 'email', 'contact_num', 'address', 'courses', 'find_jack');

        $studentDetail = new \App\Models\JackStudentDetail;
        $studentDetail->lastname = $data['lastname'];
        $studentDetail->firstname = $data['firstname'];
        $studentDetail->school = $data['school'];
        $studentDetail->grade_level = $data['grade_level'];
        $studentDetail->birthday = $data['birthday'];
        $studentDetail->age = $data['age'];
        $studentDetail->coding_bg = $data['coding_bg'];
        $studentDetail->contac_person = $data['contac_person'];
        $studentDetail->relationship = $data['relationship'];
        $studentDetail->email = $data['email'];
        $studentDetail->contact_num = $data['contact_num'];
        $studentDetail->address = $data['address'];
        $studentDetail->find_jack = $data['find_jack'];

        $studentDetail->save();

    }

}

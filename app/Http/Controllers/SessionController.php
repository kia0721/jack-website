<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\HelperUtil;
use Illuminate\Support\Facades\DB;
class SessionController extends Controller
{
    private $helperUtil;
    public function __construct()
    {
       
        $this->helperUtil = new HelperUtil;
    }
    public function saveToCart(Request $request)
    {
        $carts = $request->session()->get('cart');
        $input = $request->only('id');
        $result = [];
        if($carts == null)
            $carts = [];


        foreach ($carts as $courses) {
            if($courses->courseID == $input['id'] ){
                $result['message'] = "This course is already in your cart.";
                return $this->helperUtil->resultToJSON($result, "WARNING", 0, false);
            }
        }

        $jackCourseRes = DB::table('jack_course')->where('courseID', '=', $input['id'])->first();
        // Log::info($result);
        if($jackCourseRes == null){
            $result['message'] = "This course is not existing.";
            return $this->helperUtil->resultToJSON($result, "SUCCESS", 0, false);
        }
    
        array_push($carts, $jackCourseRes);

        $request->session()->put('cart', $carts);
        $result['message'] = "Course has been added to your cart.";
        $result['cart'] = $carts;
        return $this->helperUtil->resultToJSON($result, "SUCCESS", 0, true);
    }


    public function getSavedCart(Request $request){

        // $request->session()->put('cart', null);
        $cart = $request->session()->get('cart');
        return $cart;
    }

    public function removeSaveCourse(Request $request){
        $carts = $request->session()->get('cart');
        $input = $request->only('id');

        $newCart = [];

        foreach ($carts as $courses) {
            if($courses->courseID != $input['id'] ){
                array_push($newCart, $courses);
            }
        }
    
        $request->session()->put('cart', $newCart);


        $result['message'] = "Course has been removed to your cart.";
        $result['cart'] = $newCart;
        return $this->helperUtil->resultToJSON($result, "SUCCESS", 0, true);
    

    }


    public function saveSchedule(Request $request){
        $cartSched = $request->only('schedule');

        $cartList = [];

        foreach($cartSched['schedule'] as $cart){
            array_push($cartList, (object) $cart);
        }

        $request->session()->put('cart', $cartList);
        $result = [];
        $result['message'] = "Cart has been saved. Please complete the registration.";
        $result['cart'] = $cartList;
        return $this->helperUtil->resultToJSON($result, "SUCCESS", 0, true);
    }

    public function saveStudentInfo(Request $request){
        $studentInfo = $request->only('studGivenName', 'studLastName', 'school', 'birthdate', 'age', 'studentBackground', 'contactPerson', 'parentEmail', 'parentContactNum', 'gradeLevel', 'relationship', 'promo_code', 'findJack', 'referByVal', 'findJackVal', 'completeAddress', 'allowPhotograph', 'agreeNewStudent' );

        $request->session()->put('studentInfo', $studentInfo);

        $result = [];
        $result['message'] = "Personal info has been saved.";
        $result['studentInfo'] = $studentInfo;
        return $this->helperUtil->resultToJSON($result, "SUCCESS", 0, true);

    }

    public function getStudentInfo(Request $request){

        $studentInfo = $request->session()->get('studentInfo');
        return $studentInfo;
    }

}
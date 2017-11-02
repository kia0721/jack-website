<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Http\Request;
// use Illuminate\Auth\Events\Registered;

use App\HelperUtil;

use Illuminate\Support\Facades\Log;
use Config;
use Mail;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    // use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

     /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        
        $validator = Validator::make($data, [
            'lastname' => 'required|max:255',
            'firstname' => 'required|max:255',
            'middlename' => 'sometimes|max:255',
            'email' => 'required|email|max:255|unique:users',
            // 'password' => 'required|min:6',
            'user_type' => 'required'
        ]);
    
        return $validator;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        

        $createdBy = \Auth::user()->firstname.' '. \Auth::user()->lastname;
        $user = User::create([
            'lastname' => $data['lastname'],
            'firstname' => $data['firstname'],
            'middlename' => $data['middlename'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'user_type' => $data['user_type'],
            'created_by' => $createdBy
        ]);
        
        Log::info("Created user: ".$user->id);

        return $user;
    }


    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        if(\Auth::user()->user_type == Config::get('constants.USER_TYPE_ADMIN'))
            return view('auth.register');
        else
            return redirect('/');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        Log::info("register");

        $helperUtil = new HelperUtil;
        if(\Auth::user()->user_type == Config::get('constants.USER_TYPE_ADMIN')){
            $helperUtil->resultToJSON("You are not authorized", Config::get('constants.SC_ERR_VALIDATION'), 0, false);  

        }
        $data = $request->all();
        $validator = $this->validator($data);

        if ($validator->passes()) {
            $password = substr(str_shuffle(str_repeat("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ", 3)), 0, 8);
            
            $data['password'] = $password;
            $user = $this->create($data);

            $mailData = array(
                'name' => $data['firstname'].' '.$data['lastname'],
                'email' => $data['email'],
                'password' => $password,
                'URL' => Config::get('constants.URL')
            );

        Log::info("register ". $data['email']);
            Mail::send(['html'=>'mail.welcome'], $mailData, function ($message) use ($data) {

                $message->from(Config::get('constants.FROM_EMAIL'), Config::get('constants.APP_NAME'));

                $message->to($data['email'])->subject("Welcome to ".Config::get('constants.APP_NAME'));

            });

            if(count(Mail::failures()) > 0){
                return $helperUtil->resultToJSON("Error", Config::get('constants.SC_UXP_ERR'), $user->id, false);  
            }


            return $helperUtil->resultToJSON("success", Config::get('constants.SC_SUCESS'), $user->id, true);  
        }

        return $helperUtil->resultToJSON($validator->errors()->first(), Config::get('constants.SC_ERR_VALIDATION'), 0, false);  
    }

}

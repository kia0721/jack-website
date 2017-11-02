<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\DB;
use Validator;
use Config;

use Mail;
use App\HelperUtil;

class AccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth.admin');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('account.accounts')->with('users', $this->getUsersFromDB());
    }

    public function userDetailDisplay($userId){

        $detail = $this->getUserDetailFromDB($userId);

        return view('account.detail')
                ->with('detail', $detail);
    }

    public function updateAccount(Request $request){

        $data = $request->only('lastname', 'firstname', 'middlename', 'email', 'tenant', 'user_id', 'user_type');
        $rules = [
            'lastname' => 'required|max:255',
            'firstname' => 'required|max:255',
            'middlename' => 'sometimes|max:255',
            // 'password' => 'required|min:6',
            'user_type' => 'required'
        ];
        
        Log::info("data ".json_encode($data));

        $user = \App\User::find($data['user_id']);
        if($user->email != $data['email']){
            $rules = array_merge($rules, ['email' => 'required|email|max:255|unique:users']);
        } else {
            $rules = array_merge($rules, ['email' => 'required|email|max:255']);
        }

        Log::info("rules ".json_encode($rules));
        $validator = Validator::make($data, $rules);

        if ($validator->passes()) {

            Log::info("Passed");

            $user->firstname = $data['firstname'];
            $user->lastname = $data['lastname'];
            $user->middlename = $data['middlename'];
            $user->email = $data['email'];
            $user->save();

            return redirect()->back();
        }

        Log::info($validator->errors()->first());
        return redirect()->back()
            ->withErrors( $validator
                );
    }

    public function getUsers($userType){

        $helperUtil = new HelperUtil;
        $result = $this->getUsersFromDB();

        return response()->json(array('data' => $result)); 
    }

    public function resetPassword(Request $request){
        Log::info('resetPassword ');  
        $helperUtil = new HelperUtil;

        $data = $request->only('email', 'id');
        $password = substr(str_shuffle(str_repeat("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ", 3)), 0, 8);

        $data['password'] = $password;
        $user = \App\User::where('id', '=', $data['id'])
                ->where('email', '=', $data['email'])
                ->first();

        $user->password = bcrypt($data['password']);
        $user->save();

        $mailData = array(
            'name' => $user->firstname,
            'email' => $data['email'],
            'password' => $password
        );
        Mail::send(['html'=>'mail.reset-password'], $mailData, function ($message) use ($data) {

            $message->from(Config::get('constants.FROM_EMAIL'), Config::get('constants.APP_NAME'));

            $message->to($data['email'])->subject(Config::get('constants.APP_NAME')." Account");

        });
        return $helperUtil->resultToJSON("New password has been sent to the user", Config::get('constants.SC_SUCESS'), 0, true); 
    }

    protected function getUserDetailFromDB($userId){
        $USER_COL = ['users.id as user_id', 'users.lastname', 'users.firstname', 'users.middlename', 
        'users.email', 'users.is_active', 'users.created_at', 'users.user_type'];
        // $USER_COL = array_merge($USER_COL);
        $users = DB::table('users as users')
            ->where('users.id', '=', $userId)
            ->first($USER_COL);

        return $users;
    }

    protected function getUsersFromDB(){

        $USER_COL = ['users.id as user_id', 'users.lastname', 'users.firstname', 'users.middlename', 
        'users.email', 'users.is_active', 'users.created_at', 'users.user_type'];
        
        $users = DB::table('users as users')
        ->where('users.is_active', '=', true)
        ->get($USER_COL);
        


        Log::info(' getUsersFromDB '.$users);

        return $users;
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;
use App\HelperUtil;

//Importing laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

//Enables us to output flash messaging
use Session;
use Validator;
use Config;
use Mail;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'isAdmin']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get all users and pass it to the view
        $users = User::all(); 
        return view('users.index')->with('users', $users);
    }

    public function getAllUsers()
    {
        //Get all users and pass it to the view
        $users = User::with('roles')->get();
        return $users;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Get all roles and pass it to the view
        $roles = Role::get();
        return view('users.create', ['roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //Validate name, email and password fields
        $this->validate($request, [
            'lastname' => 'required|string|max:100',
            'firstname' => 'required|string|max:100',
            'middlename' => 'sometimes|max:100',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|confirmed'
        ]);

        $user = User::create($request->only('email', 'lastname', 'firstname', 'middlename', 'password')); //Retrieving only the email and password data

        $roles = $request['roles']; //Retrieving the roles field
    //Checking if a role was selected
        if (isset($roles)) {

            foreach ($roles as $role) {
            $role_r = Role::where('id', '=', $role)->firstOrFail();            
            $user->assignRole($role_r); //Assigning role to user
            }
        }        
    //Redirect to the users.index view and display message
        return redirect()->route('users.index')
            ->with('flash_message',
             'User successfully added.');
    }

    public function createUser(Request $request){
        $rules = [
            'lastname' => 'required|string|max:100',
            'firstname' => 'required|string|max:100',
            'email'=>'required|email|unique:users'];
       
        $input = $request->only('email', 'lastname', 'firstname');
        $validator = Validator::make($input, $rules);


        $helperUtil = new HelperUtil;
        if($validator->fails()) {
            return $helperUtil->resultToJSON($validator->errors()->first(), "", 0, false);  
        }

        $password = $this->getGeneratedPassword();
        $input['password'] = ($password);

        $user = User::create($input); //Retrieving only the email and password data

        $roles = $request['roles']; //Retrieving the roles field
    //Checking if a role was selected
        if (isset($roles)) {

            foreach ($roles as $role) {
            $role_r = Role::where('id', '=', $role)->firstOrFail();            
            $user->assignRole($role_r); //Assigning role to user
            }
        } 

        $mailData = array(
            'name' => $input['firstname'],
            'email' => $input['email'],
            'password' => $password,
            'title' => Config::get('constant.APP_TITLE'),
            'url' => Config::get('constant.PROD_URL')
        );
        Mail::send(['html'=>'mail.welcome'], $mailData, function ($message)  use ($mailData) {

            $message->from(Config::get('constant.FROM_EMAIL'), $mailData['title']);

            $message->to($mailData['email'])->subject($mailData['title']." Account");

        });
        return $helperUtil->resultToJSON("New user created successfully.", "", 0, true); 
    }


    protected function getGeneratedPassword(){
        return substr(str_shuffle(str_repeat("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZasdfghjkklqwertyuiopzxcvbnm@_", 3)), 0, 8);
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('users'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id); //Get user with specified id
        $roles = Role::get(); //Get all roles

        return view('users.edit', compact('user', 'roles')); //pass user and roles data to view

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id); //Get role specified by id

     //Validate name, email and password fields  
        $this->validate($request, [
            'lastname' => 'required|string|max:100',
            'firstname' => 'required|string|max:100',
            'middlename' => 'sometimes|max:100',
            'email'=>'required|email|unique:users,email,'.$id,
            'password'=>'required|min:6|confirmed'
        ]);
        $input = $request->only(['name', 'email', 'password']); //Retreive the name, email and password fields
        $roles = $request['roles']; //Retreive all roles
        $user->fill($input)->save();


        
        if (isset($roles)) {        
            $user->roles()->sync($roles);  //If one or more role is selected associate user to roles          
        }        
        else {
            $user->roles()->detach(); //If no role is selected remove exisiting role associated to a user
        }
        return redirect()->route('users.index')
            ->with('flash_message',
             'User successfully edited.');
    }

     public function updateUser(Request $request)
    {
        
        $rules = [
            'id' => "required",
            'lastname' => 'required|string|max:100',
            'firstname' => 'required|string|max:100',
            'email'=>'required|email|unique:users,email,'.$request["id"]];
       
        $input = $request->only('email', 'lastname', 'firstname', 'id');
        $validator = Validator::make($input, $rules);


        $helperUtil = new HelperUtil;
        if($validator->fails()) {
            return $helperUtil->resultToJSON($validator->errors()->first(), "", 0, false);  
        }

        $user = User::findOrFail($request["id"]); //Get role specified by id

        $roles = $request['roles']; //Retreive all roles
        $user->fill($input)->save();


        
        if (isset($roles)) {        
            $user->roles()->sync($roles);  //If one or more role is selected associate user to roles          
        }        
        else {
            $user->roles()->detach(); //If no role is selected remove exisiting role associated to a user
        }
         return $helperUtil->resultToJSON("Account has been  successfully updated.", "", 0, true); 
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Find a user with a given id and delete
        $user = User::findOrFail($id); 
        $user->delete();

        return redirect()->route('users.index')
            ->with('flash_message',
             'User successfully deleted.');
    }
}

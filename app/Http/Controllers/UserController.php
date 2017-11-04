<?php

namespace App\Http\Controllers;
use Redirect;
use App\User;
use App\Belongs_to;
use App\Club;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use Auth;

class UserController extends Controller
{
    //
   
    public function postRegister(Request $request) {
 
       $this->validate($request,[
      
       	'email' =>'email|required',
       	'password' => 'required|min:4',
       	'repassword' => 'required|min:4',
        'phone' => 'required|min:10'
       	]);

       $user = new User(['name' => $request->input('name'),
       	'roll_no' => $request->input('roll'),
       	'email' => $request->input('email'),
       	'password' => bcrypt($request->input('password')),
       	'gender' => $request->input('gender'),
       	'dob' => $request->input('dob'),
       	'phone' => $request->input('phone')
       	]);

       $user->save();

       Auth::login($user);

       return redirect()->route('club.home');    }

   public function postLogin(Request $request) { 

   	$this->validate($request,[
      
       	'email' =>'email|required|exists:users,email'
       	
       	]);

      if(Auth::attempt(['email'=> $request->input('email'),'password'=> $request->input('password')])) {  



      	return redirect()->route('club.home'); 
      	
      }

      return Redirect::back()
            ->withInput($request->only('email'))
            ->withErrors(
                [
                    'password' => 'Wrong Password',
                ]
              
            );
   }
   
   public function getprofile()
   {
   
     $logo=DB::select('select * from clubs where abbrevation in (select club_name from belongs_to where Student_id = ?)',[Auth::user()->roll_no]);

     $event=DB::select('select * from events where e_name in (select event_name from registered_to where student_id =
      ?)',[Auth::user()->roll_no]);

   

      return view('profile',['logo' => $logo],['event' => $event]);
   }

   public function getlogout()
   {
    Auth::logout();

    return redirect()->route('user.login');
   }

   public function getlogin()
   {
    return view('login');
   }

   public function addmembers()
   {

   }
}

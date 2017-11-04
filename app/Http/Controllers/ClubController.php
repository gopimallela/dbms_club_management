<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Club;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Event;
use Auth;
use Redirect;

class ClubController extends Controller
{
    public function getHome() {

    	if(Auth::user()->isadmin!=1)
    	{
          $Tclubs=DB::select('select * from clubs where type = ?',['Tech']);
          $Cclubs=DB::select('select * from clubs where type = ?',['Cultural']);
    	 return view('home',['Tclubs' => $Tclubs],['Cclubs' => $Cclubs]);
        }
        else
        {
        	$logo=DB::select('select * from clubs where abbrevation = ?',[Auth::user()->club]);
        	return view('adminhome',['logo' => $logo]);
        }
    }

    public function getclub($club_name)
    {
    	$club=DB::select('select * from clubs where abbrevation = ?',[$club_name]);
    	return view('club',['club' => $club]);
    }

    public function getevents()
    {
    	$events=Event::all();
    	return view('events',['events' => $events]);
    }

    public function geteventregister($id)
    {
       DB::insert('insert into registered_to (student_id,event_name) values (?,?)',[Auth::User()->roll_no,$id]);
       return redirect()->back();

    }

    public function addmembers()
    {
    	$mem=DB::select('select * from users where roll_no in (select Student_id from belongs_to where club_name = ?)',[Auth::user()->club]);

    	return view('addmembers',['mem' => $mem]); 
    }

    public function insertmember(Request $r)
    {
    	DB::insert('insert into belongs_to (Student_id,club_name) values (?,?)',[$r->input('addmember'),Auth::user()->club]);
    	 return redirect()->back()->with('message', 'Successfully added to the table');
    }

    public function members($name)
    {
         $mem=DB::select('select * from users where roll_no in (select Student_id from belongs_to where club_name = ?)',[$name]);
         return view('members',['mem' => $mem]);
    }

    public function filterevents($name)
    {
    	$events=DB::select('select * from events where club = ?',[$name]);
    	return view('events',['events' => $events]);
    }

    public function addevents()
    {
         return view('addevents');
    }

    public function createevents(Request $r)
    {
    	$eve = new Event;

    	$eve->event_id = $r->input('id');
    	$eve->e_name = $r->input('name');
    	$eve->e_convenor=$r->input('organiser');
    	$eve->venue = $r->input('venue');
    	$eve->description = $r->input('description');
    	$eve->club = Auth::user()->club;

    	if(Input::hasFile('poster'))
    	{
    		$file = Input::file('poster');
    		$file->move(public_path().'/',$file->getClientOriginalName());
    		$eve->logo=$file->getClientOriginalName();
			
    	}
    	$eve->save();

    	return redirect()->back();

     

  
    }
}

<?php

namespace App\Http\Controllers;
use Sentinel;
use Session;
use App\Http\Requests\SessionRequest;
use Redirect;
use DB;

class SessionsController extends Controller
{	
    public function login()
    {   	
    	if($use = Sentinel::check())
    		{
    			Session::flash("notice","You has login".$use->email);
    			return redirect('/');
    		}else{
    			return view('sessions.login');
    		}
    }

    public function login_store(SessionRequest $request)
    {
        try {
        if($user = Sentinel::authenticate($request->all()))
    		{
                if(Sentinel::getUser()->hasAccess('admin')) {
                    Session::flash("notice", "Welcome ".$user->email);
                    return redirect()->intended('admin/manages');
                } else{ 
    			Session::flash("notice", "Welcome ".$user->email);
                $login=Sentinel::getUser()->id ;
                $cek= DB::table('user_details')->where('user_id', '=', $login)->first();
                if($cek!= null){
                    return redirect()->intended('details');
                }else{
                    return redirect()->route('details.create');    
                }}
    			
    		}else{
    			Session::flash("error","Login Fails");
    			return view('sessions.login');
    		}
        } catch (\Cartalyst\Sentinel\Checkpoints\NotActivatedException $e) {
        $errors = 'Account not activated.';
        Session::flash("error","Account Not Actived, Please Check Email");
       // return Redirect::route('login');
        }

    }

    public function logout()
    {
    	Sentinel::logout();
    	Session::flash("notice","Logout Success");
    	return redirect('/');
    }
}

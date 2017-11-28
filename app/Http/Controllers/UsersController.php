<?php

namespace App\Http\Controllers;

use Sentinel,Validator,Response;
use Session,Event,Redirect,DB;
use App\Http\Requests\UserRequest;
use Cartalyst\Sentinel\Laravel\Facades\Reminder;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use App\Events\ActivationEvent;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;


class UsersController extends Controller
{
   
    public function signup()
    {
    	return view('users.signup');
    }

    public function signup_store(UserRequest $request)
    {   
        $date=date('Y/m/d', strtotime($request->date_of_birth));
        $age= \Carbon\Carbon::parse($date)->diff(\Carbon\Carbon::now())->format('%y');
       // dd($age);
        if($age > '17'){
            $input = $request->except(['date_of_birth']);
            $input['date_of_birth'] = $date;
            $user = Sentinel::register($input);
            $input =User::where('email', $request->email)->first()->id;
            $userAc = Sentinel::findById($input);
            $lowrole = Sentinel::findRoleByName('Low');
            $user->roles()->attach($lowrole);
            $activation = Activation::create($userAc);
            Event::fire(new ActivationEvent($user, $activation));
        	Session::flash('notice','Success create new user check email');
        	return redirect()->back();
        }else{
            Session::flash('notice','Your Age is Under 17 Years');
            return redirect()->back();
    }
    }

    public function update(Request $request, $id, $code) {
    $user = Sentinel::findById($id);
    $activation = Activation::exists($user, $code);
    if ($activation) {
        Session::flash('notice', 'Activation Successfull');
        Activation::complete($user, $code);
        Sentinel::login($user);
        $login=Sentinel::getUser()->id ;
        $cek= DB::table('user_details')->where('user_id', '=', $login)->first();
                if($cek!= null){
                    return redirect()->intended('/');
                }else{
                    return redirect()->route('details.create');    
                }
    } else {
        Session::flash('error', 'Something Wrong');
    }
    }
}


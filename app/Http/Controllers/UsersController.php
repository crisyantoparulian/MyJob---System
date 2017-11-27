<?php

namespace App\Http\Controllers;

use Sentinel,Validator,Response;
use Session,Event,Redirect;
use App\Http\Requests\UserRequest;
use Cartalyst\Sentinel\Laravel\Facades\Reminder;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use App\Events\ActivationEvent;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    protected $rules =
    [
        'email' => 'required|min:2|max:32|email',
        'password' => 'required|min:8|max:20'
    ];
    public function signup()
    {
    	return view('users.signup');
    }

    public function signup_store(UserRequest $request)
    {   
        $validator = Validator::make($request->all(), $this->rules);
        if ($validator->fails()) {
            return Redirect::to('signup/')
            ->withErrors($validator)
            ->withInput();
        } else {
       // $input= $request->all();
        $user = Sentinel::register($request->all());
        $input =User::where('email', $request->email)->first()->id;
        $userAc = Sentinel::findById($input);
      //  dd($userAc);
        $activation = Activation::create($userAc);
        Event::fire(new ActivationEvent($user, $activation));
    	Session::flash('notice','Success create new user check email');
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
        return redirect('/');
    } else {
        Session::flash('error', 'Something Wrong');
    }
    }
}


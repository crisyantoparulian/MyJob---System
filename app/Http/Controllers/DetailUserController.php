<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File,DB;
use App\DetailUser;
use Sentinel;
use Session;


class DetailUserController extends Controller
{
    public function __construct() {
        $this->middleware('sentinel');
        $this->middleware('sentinel.role');
        }
    public function index()
    {
        $id=Sentinel::getUser()->id;
        $details = DetailUser::where('user_id','=',$id)->get();
        return view('users.index')->with('details', $details);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id=Sentinel::getUser()->id;
        $cek= DB::table('user_details')->where('user_id', '=', $id)->first();
        if($cek != null){
        Session::flash("notice","You Have Adding your detail");
        return redirect()->route("details.index");
        }else{
            return view('users.create');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except(['photo','file_cv']);
        $input['user_id'] = Sentinel::getUser()->id ;
        $input['photo'] = time().'.'.$request->photo->getClientOriginalExtension();
        $request->photo->move(public_path('photo'), $input['photo']);
        $input['file_cv'] = time().'.'.$request->file_cv->getClientOriginalExtension();
        $request->file_cv->move(public_path('cv'), $input['file_cv']);   
        DetailUser::create($input);
        Session::flash("notice","Article success created");
        return redirect()->route("details.create");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

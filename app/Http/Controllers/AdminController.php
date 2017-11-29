<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetailUser;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('sentinel');
        $this->middleware('sentinel.role');
        }
    public function index()
    {
        $count = DetailUser::where('status_cv','=','Unread')->count();
        $count2 = DetailUser::all()->count();

       // dd($countall);
        return view('admin.index')->with('count', $count)
        ->with('count2', $count2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function list()
    {
        $details = DetailUser::where('status_cv','=','Unread')->orderBy('created_at', 'asc')->paginate(6);
        return view('admin.list')->with('details', $details);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    public function user(Request $request)
    {
        $details = DetailUser::paginate(6);
        return view('admin.admin')->with('details', $details);
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

    public function change($id)
    {
            $details = DetailUser::where('user_id','=',$id)->get()->first();
            $details->status_cv = "Accepted";
            $details->save();
        return redirect()->route("manages.list");;
    }
    public function reject($id)
    {
            $details = DetailUser::where('user_id','=',$id)->get()->first();
            $details->status_cv = "Rejected";
            $details->save();
        return redirect()->route("manages.list");;
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

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Session;
use Illuminate\Support\Facades\Validator;
use App\User;
class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessions=Session::where('status', '=', 1)->orderBy('id', 'DESC')->get();
        return view('admin.company.session.view',compact('sessions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.company.session.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules=[
            'name' => 'required|unique:sessions|max:255',
            'startdate' => 'required|max:255',
            'enddate' => 'required|max:255',
        ];

        $messages=[
            'name.unique'=>'Session name Alreay save.',
            'name.required'=>'Session name is required. Please fill-up.',
            'name.max'=>'Session name should not be greater then 255.',

            'startdate.required'=>'Start Date  required. Please Provide Start Date.',
            'startdate.max'=>'Start Date should not be greater then 255.',

            'enddate.required'=>'End Date  required. Please Provide End Date.',
            'enddate.max'=>'End Date should not be greater then 255.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);


         if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $session=new Session();
        $session->name=$request->name;
        $session->startdate=$request->startdate;
        $session->enddate=$request->enddate;
        $session->ipaddress=$request->getClientIp();
        $session->createdby=auth()->user()->id;
        $session->save();

        return back()->with('message','Session Create Successfully.');


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
        $session=Session::find($id);
        return view('admin.company.session.edit',compact('session'));
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

        $request->validate([
            'name' => 'required|max:255|unique:sessions,name,'.$id,
        ]);

                $rules=[
            'name' => 'required|max:255',
            'startdate' => 'required|max:255',
            'enddate' => 'required|max:255',
        ];

        $messages=[
            'name.unique'=>'Session name Alreay save.',
            'name.required'=>'Session name is required. Please fill-up.',
            'name.max'=>'Session name should not be greater then 255.',

            'startdate.required'=>'Start Date  required. Please Provide Start Date.',
            'startdate.max'=>'Start Date should not be greater then 255.',

            'enddate.required'=>'End Date  required. Please Provide End Date.',
            'enddate.max'=>'End Date should not be greater then 255.',
        ];

        $session=Session::find($id);
        $session->name=$request->name;
        $session->startdate=$request->startdate;
        $session->enddate=$request->enddate;
        $session->ipaddress=$request->getClientIp();
        $session->createdby=auth()->user()->id;
        $session->save();

        return redirect(route('session.index'))->with('message','Session Update Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }


     public function status($id)
    {
        $session=Session::find($id);
        $session->status="0";
         $session->save();

        return redirect(route('session.index'))->with('message','Session Delete Successfully');
    }
}

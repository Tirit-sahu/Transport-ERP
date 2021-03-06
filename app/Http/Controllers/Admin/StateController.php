<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\State;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.place.state.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'statename'=>'required|unique:states'
        ]);
        $state=new State();
        $state->statename=$request->statename;
        $state->state_code=$request->state_code;       
        $state->save();
        return back()->with('message','State Add Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $states=State::where('status',0)->orderBy('id','DESC')->get();
        return view('admin.place.state.view',compact('states'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $state=State::find($id);
        return view('admin.place.state.edit',compact('state'));
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
            'statename'=>'required|unique:states'
        ]);
        
        $state=State::find($id);
        $state->statename=$request->statename;
        $state->state_code=$request->state_code;        
        $state->save();
        return redirect('/admin/place/state/show')->with('message','State Update Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        State::find($id)->delete();
        return back()->with('message','State Delete Successfully.');

    }
}

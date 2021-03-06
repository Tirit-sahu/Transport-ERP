<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Admin\Petrolpump;
use App\Admin\State;
use Illuminate\Http\Request;

class PetrolpumpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $petrols=Petrolpump::all();
         return view('admin.inv.petrol.view',compact('petrols'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states=State::all();
        return view('admin.inv.petrol.create',compact('states'));
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
            'petrol_pump_name' => 'required',
            'state_id' => 'required',
            'type' => 'required',
        ]);
       

        $petrol=new Petrolpump;
        $petrol->petrol_pump_name=$request->petrol_pump_name;
        $petrol->address=$request->address;
        $petrol->district=$request->district;
        $petrol->state_id=$request->state_id;
        $petrol->mobile=$request->mobile;
        $petrol->alter_mobile=$request->alter_mobile;
        $petrol->email=$request->email;
        $petrol->gst_no=$request->gst_no;
        $petrol->pan_no=$request->pan_no;
        $petrol->contact_person_name=$request->contact_person_name;
        $petrol->designation=$request->designation;
        $petrol->contact_person_mobile=$request->contact_person_mobile;
        $petrol->contact_person_email=$request->contact_person_email;
        $petrol->type=$request->type;
        $petrol->save();
        return redirect()->back()->with('message','Added Pentrol Pump Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Petrolpump  $petrolpump
     * @return \Illuminate\Http\Response
     */
    public function show(Petrolpump $petrolpump)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Petrolpump  $petrolpump
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $petrol=Petrolpump::find($id);
        $states=State::all();
        return view('admin.inv.petrol.edit',compact('states','petrol'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Petrolpump  $petrolpump
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $request->validate([
            'petrol_pump_name' => 'required',
            'state_id' => 'required',
            'type' => 'required',
        ]);

        $petrol=Petrolpump::find($id);

        $petrol->petrol_pump_name=$request->petrol_pump_name;
        $petrol->address=$request->address;
        $petrol->district=$request->district;
        $petrol->state_id=$request->state_id;
        $petrol->mobile=$request->mobile;
        $petrol->alter_mobile=$request->alter_mobile;
        $petrol->email=$request->email;
        $petrol->gst_no=$request->gst_no;
        $petrol->pan_no=$request->pan_no;
        $petrol->contact_person_name=$request->contact_person_name;
        $petrol->designation=$request->designation;
        $petrol->contact_person_mobile=$request->contact_person_mobile;
        $petrol->contact_person_email=$request->contact_person_email;
        $petrol->type=$request->type;
        $petrol->save();

        return redirect(route('petrol.index'))->with('message','Updated Pentrol Pump Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Petrolpump  $petrolpump
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $petrol=Petrolpump::find($id)->delete();
              return redirect(route('petrol.index'))->with('message','Deleted Pentrol Pump Successfully.');
    }
}

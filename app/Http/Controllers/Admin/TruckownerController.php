<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Admin\Truckowner;
use App\Admin\State;
use Illuminate\Http\Request;
use Storage;
use DB;


class TruckownerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owners=Truckowner::orderBy('id', 'DESC')->get();
        return view('admin.truck.owner.view',compact('owners'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states=State::all();
        return view('admin.truck.owner.create',compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $owner=new Truckowner();

        $request->validate([
        'owner_name' => 'required',
        'state_code' => 'required',
        'owner_type' => 'required',
        'tds_status' => 'required',
        ]);
        $where = array("owner_name"=>$request->owner_name,"ac_no"=>$request->ac_no);
        $count = DB::table('truckowners')->where($where)->count();
        if($count==0){

        if($request->hasFile('document')){
             $image = $request->file('document');
             $fileName = date('Ymdhis').'1.'.$image->extension();
             $image->storeAs('documnetowner',$fileName,'public');
           $owner->document=$fileName;
        }
        if($request->hasFile('upload_pan_card')){
             $image = $request->file('upload_pan_card');
             $fileNamePan = date('Ymdhis').'2.'.$image->extension();
             $image->storeAs('documnetowner',$fileNamePan,'public');
           $owner->upload_pan_card=$fileNamePan;
        }
        if($request->hasFile('upload_aadhar_card')){
             $image = $request->file('upload_aadhar_card');
             $fileNameAadhar = date('Ymdhis').'2.'.$image->extension();
             $image->storeAs('documnetowner',$fileNameAadhar,'public');
             $owner->upload_aadhar_card=$fileNameAadhar;
        }

        $owner->owner_name=$request->owner_name;
        $owner->father_name=$request->father_name;
        $owner->mobile=$request->mobile;
        $owner->pan_no=$request->pan_no;
        $owner->address=$request->address;
        $owner->owner_type=$request->owner_type;
        $owner->gst_no=$request->gst_no;
        $owner->state_code=$request->state_code;
        $owner->ac_no=$request->ac_no;
        $owner->bank_name=$request->bank_name;
        $owner->branch_name=$request->branch_name;
        $owner->ifsc_code=$request->ifsc_code;
        $owner->alter_ac_no=$request->alter_ac_no;
        $owner->alter_bank_name=$request->alter_bank_name;
        $owner->alter_branch_name=$request->alter_branch_name;
        $owner->alter_ifsc_code=$request->alter_ifsc_code;
        $owner->tds_status=$request->tds_status;
        $owner->createdby=auth()->user()->id;       
        $owner->save();
        return redirect()->back()->with('message','Add Truck Owner Details Successfully.');
        }else{
          return redirect()->back()->with('error','Already Exist.');
        }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Truckowner  $truckowner
     * @return \Illuminate\Http\Response
     */
    public function show(Truckowner $truckowner)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Truckowner  $truckowner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $states=State::all();
      $owner=Truckowner::find($id);
        return view('admin.truck.owner.edit',compact('states','owner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Truckowner  $truckowner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
         $owner=new Truckowner();

             $request->validate([
            'owner_name' => 'required',
            'state_code' => 'required',
            'owner_type' => 'required',
            'tds_status' => 'required',
            ]);
         $owner=Truckowner::find($id);
        if($request->hasFile('document')){
             $image = $request->file('document');
             $fileName = date('Ymdhis').'1.'.$image->extension();
             $image->storeAs('documnetowner',$fileName,'public');
           $owner->document=$fileName;
        }
        if($request->hasFile('upload_pan_card')){
             $image = $request->file('upload_pan_card');
             $fileNamePan = date('Ymdhis').'2.'.$image->extension();
             $image->storeAs('documnetowner',$fileNamePan,'public');
           $owner->upload_pan_card=$fileNamePan;
        }
        if($request->hasFile('upload_aadhar_card')){
             $image = $request->file('upload_aadhar_card');
             $fileNameAadhar = date('Ymdhis').'2.'.$image->extension();
             $image->storeAs('documnetowner',$fileNameAadhar,'public');
             $owner->upload_aadhar_card=$fileNameAadhar;
        }

        $owner->owner_name=$request->owner_name;
        $owner->father_name=$request->father_name;
        $owner->mobile=$request->mobile;
        $owner->pan_no=$request->pan_no;
        $owner->address=$request->address;
        $owner->owner_type=$request->owner_type;
        $owner->gst_no=$request->gst_no;
        $owner->state_code=$request->state_code;
        $owner->ac_no=$request->ac_no;
        $owner->bank_name=$request->bank_name;
        $owner->branch_name=$request->branch_name;
        $owner->ifsc_code=$request->ifsc_code;

        $owner->alter_ac_no=$request->alter_ac_no;
        $owner->alter_bank_name=$request->alter_bank_name;
        $owner->alter_branch_name=$request->alter_branch_name;
        $owner->alter_ifsc_code=$request->alter_ifsc_code;

        $owner->tds_status=$request->tds_status;
        // $owner->createdby=auth()->user()->id;
       
        $owner->save();
        return redirect(route('owner.index'))->with('message','Update Truck Owner Details Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Truckowner  $truckowner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $owner=Truckowner::find($id);
         
         Storage::delete('public/documnetowner/'.$owner->document);
            $owner->delete();
             return redirect(route('owner.index'))->with('message','Delete Truck Owner Details Successfully.');
        }
}

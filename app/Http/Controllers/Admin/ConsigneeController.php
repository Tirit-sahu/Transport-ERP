<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Place;
use App\Admin\State;
use App\Admin\Consignee;
use Illuminate\Support\Facades\Validator;
use Storage;


class ConsigneeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consignees=Consignee::orderBy('id','DESC')->get();
        return view('admin.company.consignee.view',compact('consignees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states=State::all();
        $places=Place::all();
        return view('admin.company.consignee.create',compact('places','states'));
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
            'consignee_name' => 'required|max:255|unique:consignees',
            'place_id' => 'required|max:255',
            'state_id'=>'required',
            'status'=>'required',
            
        ];

        $messages=[
            'consignee_name.required'=>'Consignee Name is required. Please fill-up.',
            'consignee_name.max'=>'Consignee Name should not be greater then 255.',
            'consignee_name.unique'=>'Consignee Name already save.',
            
        
            'place_id.required'=>'Place Name is required.',
            'status.required'=>'Status is required',
            'state_id.required'=>'State is required. Please Selected.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);


         if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $consignee=new Consignee();

        if($request->hasFile('document')){
            $fileName=$request->document->getClientOriginalName();
             $request->document->storeAs('docsConsi',$fileName,'public');
           $consignee->document=$fileName;
        }

        $consignee->consignee_name=$request->consignee_name;
        $consignee->place_id=$request->place_id;
        $consignee->state_id=$request->state_id;
        $consignee->consignee_mobile=$request->consignee_mobile;
        $consignee->consignee_email=$request->consignee_email;
        $consignee->consignee_address=$request->consignee_address;
        $consignee->consignee_gst_no=$request->consignee_gst_no;
        $consignee->type=$request->type;
        $consignee->consignee_name=$request->consignee_name;
        $consignee->status=$request->status;
        $consignee->save();
        return back()->with('message','Consigee Add Successfully');
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
        $states=State::all();
        $places=Place::all();
        $consignee=Consignee::find($id);
        return view('admin.company.consignee.edit',compact('places','states','consignee'));
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

        $rules=[
            'consignee_name' => 'required|max:255|unique:consignees,name,'.$id,
            'place_id' => 'required|max:255',
            'status'=>'required',
                'state_id'=>'required',            
        ];

        $messages=[
            'consignee_name.required'=>'Consignee Name is required. Please fill-up.',
            'consignee_name.max'=>'Consignee Name should not be greater then 255.',
            'consignee_name.unique'=>'Consignee Name already save.',
        
            'place_id.required'=>'Place Name is required.',
            'status.required'=>'Status is required',
            'state_id.required'=>'State is required. Please Selected.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);


         if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }


        $consignee=Consignee::find($id);

        if($request->hasFile('document')){
            $fileName=$request->document->getClientOriginalName();
            Storage::delete('public/docsConsi/'.$consignee->document);
             $request->document->storeAs('docsConsi',$fileName,'public');
           $consignee->document=$fileName;
        }

        $consignee->consignee_name=$request->consignee_name;
        $consignee->place_id=$request->place_id;
        $consignee->state_id=$request->state_id;
        $consignee->consignee_mobile=$request->consignee_mobile;
        $consignee->consignee_email=$request->consignee_email;
        $consignee->consignee_address=$request->consignee_address;
        $consignee->consignee_gst_no=$request->consignee_gst_no;
        $consignee->type=$request->type;

        $consignee->consignee_name=$request->consignee_name;

        $consignee->status=$request->status;
        $consignee->ipaddress=$request->getClientIp();
        $consignee->createdby=auth()->user()->id;
        
        $consignee->save();
        return redirect(route('consignee.index'))->with('message','Consigee Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consignee= Consignee::find($id);
          
          Storage::delete('public/docsConsi/'.$consignee->document);
         $consignee->delete();
         return back()->with('message','Consignee Delete Successfully.');
    }
}

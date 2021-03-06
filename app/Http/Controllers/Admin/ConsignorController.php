<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Place;
use App\Admin\State;
use App\Admin\Consignor;
use Illuminate\Support\Facades\Validator;
use Storage;


class ConsignorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consignories=Consignor::where('status',1)->orderBy('id','DESC')->get();
        return view('admin.company.consignor.view',compact('consignories'));
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
        return view('admin.company.consignor.create',compact('places','states'));
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
            'consignor_name' => 'required|max:255|unique:consignors',
            'place_id' => 'required|max:255',
            'state_id'=>'required',
            'status'=>'required',
            
        ];

        $messages=[
            'consignor_name.required'=>'Consignor Name is required. Please fill-up.',
            'consignor_name.max'=>'Consignor Name should not be greater then 255.',
            'consignor_name.unique'=>'Consignor Name is Already save.',
            
        
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



        $consignor=new Consignor();

        if($request->hasFile('document')){
            $fileName=$request->document->getClientOriginalName();
             $request->document->storeAs('docsImg',$fileName,'public');
           $consignor->document=$fileName;
        }

        $consignor->consignor_name=$request->consignor_name;
        $consignor->place_id=$request->place_id;
        $consignor->state_id=$request->state_id;
        $consignor->consignor_mobile=$request->consignor_mobile;
        $consignor->consignor_email=$request->consignor_email;
        $consignor->consignor_address=$request->consignor_address;
        $consignor->consignor_gst_no=$request->consignor_gst_no;
        $consignor->company_commission=$request->company_commission;
        $consignor->status=$request->status;
        // $consignor->createdby=auth()->user()->id;

        $consignor->save();
        return back()->with('message','Consignor Add Successfully.');
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
        $consignor=Consignor::find($id);
        return view('admin.company.consignor.edit',compact('states','places','consignor'));

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
            'consignor_name' => 'required|max:255|unique:consignors,consignor_name,'.$id,
            'place_id' => 'required|max:255',
            'state_id'=>'required',
            'status'=>'required',
            
        ];

        $messages=[
            'consignor_name.required'=>'Consignor Name is required. Please fill-up.',
            'consignor_name.max'=>'Consignor Name should not be greater then 255.',
            'consignor_name.unique'=>'Consignor Name is Already save.',
            
        
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

       $consignor=Consignor::find($id);


         if($request->hasFile('document')){
            $fileName=$request->document->getClientOriginalName();
            Storage::delete('public/docsImg/'.$consignor->document);
             $request->document->storeAs('docsImg',$fileName,'public');
            $consignor->document=$fileName;
        }

        $consignor->consignor_name=$request->consignor_name;
        $consignor->place_id=$request->place_id;
        $consignor->state_id=$request->state_id;
        $consignor->consignor_mobile=$request->consignor_mobile;
        $consignor->consignor_email=$request->consignor_email;
        $consignor->consignor_address=$request->consignor_address;
        $consignor->consignor_gst_no=$request->consignor_gst_no;
        $consignor->company_commission=$request->company_commission;
        $consignor->status=$request->status;
        $consignor->save();
        return redirect(route('consignor.index'))->with('message','Consignor Update Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consignor=Consignor::find($id);
        Storage::delete('public/docsImg/'.$consignor->document);
       $consignor->delete();
        return back()->with('message','Consignor Delete Successfully.');
    }
}

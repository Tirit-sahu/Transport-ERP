<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Admin\Truck;
use App\Admin\Truckowner;
use App\Admin\Trucktype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Storage;

class TruckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trucks=Truck::all()->sortByDesc('id');
        return view('admin.truck.truck.view',compact('trucks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types=Trucktype::all();
        $owners=Truckowner::all();
        return view('admin.truck.truck.create',compact('types','owners'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $truck=new Truck();


        $rules=[
            'truck_number' => 'required|max:255|unique:trucks',
            'truckowner_id' => 'required|max:255',
            'tructype_id'=>'required',
            
        ];

        $messages=[
            'truck_number.required'=>'Truck Number is required. Please fill-up.',
            'truck_number.max'=>'Truck Number should not be greater then 255.',
            'truck_number.unique'=>'Truck Number is Already save.',
            
        
            'truckowner_id.required'=>'Truck Onwer Name is required.',
            'tructype_id.required'=>'Truck Type is required',
            
        ];

        $validator = Validator::make($request->all(), $rules, $messages);


         if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }       

        if($request->hasFile('document')){
            $image = $request->file('document');
            $input['imagename'] = date('Ymdhis').'1.'.$image->extension();
            $request->document->storeAs('doctruck',$input['imagename'],'public');
            $truck->document=$input['imagename'];
        }


        $truck->truck_number=$request->truck_number;
        $truck->truckowner_id=$request->truckowner_id;
        $truck->tructype_id=$request->tructype_id;
        $truck->truck_model=$request->truck_model;
        $truck->manufacturer=$request->manufacturer;
        $truck->chassisno=$request->chassisno;
        $truck->engineno=$request->engineno;
        $truck->ipaddress=$request->getClientIp();
        $truck->createdby=auth()->user()->id;

        $truck->save();
        return redirect()->back()->with('message','Add Truck Details successully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function show(Truck $truck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $truck=Truck::find($id);
        $types=Trucktype::all();
        $owners=Truckowner::all();
        return view('admin.truck.truck.edit',compact('truck','types','owners'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

         $rules=[
            'truck_number' => 'required|max:255|unique:trucks,truck_number,'.$id,
            'truckowner_id' => 'required|max:255',
            'tructype_id'=>'required',
            
        ];

        $messages=[
            'truck_number.required'=>'Truck Number is required. Please fill-up.',
            'truck_number.max'=>'Truck Number should not be greater then 255.',
            'truck_number.unique'=>'Truck Number is Already save.',
            
        
            'truckowner_id.required'=>'Truck Onwer Name is required.',
            'tructype_id.required'=>'Truck Type is required',
            
        ];

        $validator = Validator::make($request->all(), $rules, $messages);


         if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }



          $truck=Truck::find($id);

        if($request->hasFile('document')){
            $image = $request->file('document');
            $input['imagename'] = date('Ymdhis').'1.'.$image->extension();
            $request->document->storeAs('doctruck',$input['imagename'],'public');
            $truck->document=$input['imagename'];
        }

        $truck->truck_number=$request->truck_number;
        $truck->truckowner_id=$request->truckowner_id;
        $truck->tructype_id=$request->tructype_id;
        $truck->truck_model=$request->truck_model;
        $truck->manufacturer=$request->manufacturer;
        $truck->chassisno=$request->chassisno;
        $truck->engineno=$request->engineno;
        $truck->ipaddress=$request->getClientIp();
        $truck->createdby=auth()->user()->id;
        
        $truck->save();
        return redirect('/admin/truck/truck')->with('message','Updated successully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Truck  $truck
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $truck=Truck::find($id);
         Storage::delete('public/truck/'.$truck->document);
            $truck->delete();
             return redirect(route('truck.index'))->with('message','Delete Truck Details Successfully.');

    }
}

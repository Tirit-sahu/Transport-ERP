<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Admin\Trucktype;
use Illuminate\Http\Request;

class TruckTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types=Trucktype::where('status',0)->orderBy('id','DESC')->get();
        return view('admin.truck.type.view',compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.truck.type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type=new Trucktype();
        $type->trucktype=$request->trucktype;
        $type->avg_criteria=$request->avg_criteria;
        // $type->ipaddress=$request->getClientIp();
        // $type->createdby=auth()->user()->id;

        $type->save();
        return redirect()->back()->with('message','Truck Type Add Successfully.');
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
        $type=Trucktype::find($id);
        return view('admin.truck.type.edit',compact('type'));

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
        $type=Trucktype::find($id);
        $type->trucktype=$request->trucktype;
        $type->avg_criteria=$request->avg_criteria;
        // $type->ipaddress=$request->getClientIp();
        // $type->createdby=auth()->user()->id;
        
        $type->save();
        return redirect(route('type.index'))->with('message','Truck Type Update Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type=Trucktype::find($id)->delete();
         return redirect(route('type.index'))->with('message','Truck Type Delete Successfully.');
    }
}

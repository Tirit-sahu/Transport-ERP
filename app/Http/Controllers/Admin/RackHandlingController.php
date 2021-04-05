<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Admin\rack_handling;
use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;

class RackHandlingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.rack_handling');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        DB::table('rack_handlings')
        ->insert($data);
        $request->session()->flash('message', 'New Record Added Successfully');
        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\rack_handling  $rack_handling
     * @return \Illuminate\Http\Response
     */
    public function show(rack_handling $rack_handling)
    {
        $rack_handlings = DB::table('rack_handlings')->orderBy('id', 'DESC')->get();
        return view('admin.report_rack_handling', ['rack_handlings'=>$rack_handlings]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\rack_handling  $rack_handling
     * @return \Illuminate\Http\Response
     */
    public function edit($id, rack_handling $rack_handling)
    {
        $rack_handling = DB::table('rack_handlings')->where('id', $id)->first();
        return view('admin.rack_handling', ['rack_handling'=>$rack_handling]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\rack_handling  $rack_handling
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, rack_handling $rack_handling)
    {
        $data = $request->all();
        DB::table('rack_handlings')
        ->where('id', $id)
        ->update($data);
        $request->session()->flash('message', 'Record Updated Successfully');
        return Redirect('/rackHandlingShow');
    }


    public function rackHandlingPayment(Request $request)
    {
        return view('admin.rack_handling_payment');
    }

    public function getVehicleWithGatePass(commonController $cc)
    {      
        $collection=DB::table("rack_handlings")->where("is_payment", 0)->get();
        $select_option='';
        $select_option.="<option value=''>Select an Option</option>";
        foreach ($collection as $row) {
        $vehicle = $cc->getValueStatic("trucks","truck_number","id",$row->vehicle);
        $select_option.="<option value='".$row->id."'>".$vehicle.' / '.$row->gate_pass_number."</option>";
        }
        return $select_option;
    }


    public function rackHandlingPaymentStore(Request $request)
    {
        $myArray = array(
            'rack_handlings_id' => $request->vehicle,
            'payment_date' => date('Y-m-d', strtotime($request->payment_date)),
            'payment_amt' => $request->payment_amt
        );

        DB::table('rack_handling_payments')->insert($myArray);
        $request->session()->flash('message', 'Payment Successfully');
        return Redirect::back();

    }

    public function rackHandlingPaymentShow(Request $request)
    {
        $rack_handling_payments = DB::table('rack_handling_payments')->orderBy('id', 'DESC')->get();
        return view('admin.report_rack_handling_payment', ['rack_handling_payments'=>$rack_handling_payments]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\rack_handling  $rack_handling
     * @return \Illuminate\Http\Response
     */
    public function destroy(rack_handling $rack_handling)
    {
        //
    }
}

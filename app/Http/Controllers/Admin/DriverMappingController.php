<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;

class DriverMappingController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.driver_mapping');
    }

    public function create(Request $request)
    {
        # code...
    }

    public function store(Request $request)
    {
        $request->validate([
            'vehicle'=>'required',
            'driver'=>'required',
            'helper'=>'required',
            'fromeDate'=>'required',
        ]);
        $data = $request->all();
        DB::table('driver_mappings')->insert($data);
        Session::flash('message', 'New Record Added Successfully');
        return Redirect::back();
    }

    public function show(Request $request)
    {
        $driver_mappings = DB::table('driver_mappings')->orderBy('id', 'DESC')->get();
        return view('admin.report_driver_mapping', ['driver_mappings'=>$driver_mappings]);
    }

    public function edit($id, Request $request)
    {
        $driver_mapping = DB::table('driver_mappings')->where('id', $id)->first();
        return view('admin.driver_mapping', ['driver_mapping'=>$driver_mapping]);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'vehicle'=>'required',
            'driver'=>'required',
            'helper'=>'required',
            'fromeDate'=>'required',
        ]);
        $data = $request->all();
        DB::table('driver_mappings')->where('id', $id)->update($data);
        Session::flash('message', 'Record Updated Successfully');
        return Redirect('/driverMappingReport');
    }

    public function delete($id, Request $request)
    {
        DB::table('driver_mappings')->where('id', $id)->delete();
        Session::flash('message', 'Deleted Successfully');
        return Redirect('/driverMappingReport');
    }

    public function driverMappingLeave(Request $request)
    {
        $where = array('id'=>$request->mappingId);
        $myArray = '';
        if($request->designation=="Driver"){
            $myArray = array(
                'leaveDateD'=>$request->leaveDate
            );
        }else{
            $myArray = array(
                'leaveDateH'=>$request->leaveDate
            );
        }
        DB::table('driver_mappings')->where($where)->update($myArray);
        Session::flash('message', 'Leave Updated Successfully');
        return Redirect('/driverMappingReport');
    }



}

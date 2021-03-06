<?php

namespace App\Http\Controllers\Admin;

use app\Admin\driver;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;

class DriverController extends Controller
{
    public function create(Request $request){
        return view('admin.maintain.drivers.drivers');
    }

    public function store(Request $request){
        $data = $request->all();

        if($request->hasFile('uploadDriverLisence')){
                $image = $request->file('uploadDriverLisence');
                $filename = date('Ymdhis').'.'.$image->extension();
                $image->storeAs('DriverDocs', $filename, 'public');  
                $data['uploadDriverLisence'] = $filename;
        }
        DB::table('drivers')->insert($data);
        Session::flash('message', 'New Record Added Successfully');
        return Redirect('/driver/create');
    }

    public function show(Request $request){
        $drivers = DB::table('drivers')->orderBy('id', 'DESC')->get();
        return view('admin.maintain.drivers.view', ['drivers'=>$drivers]);
    }

    public function edit($id, Request $request){
        $driver = DB::table('drivers')->where('id', $id)->first();
        return view('admin.maintain.drivers.drivers', ['driver'=>$driver]);
    }

    public function update($id, Request $request){
        $data = $request->all();

        if($request->hasFile('uploadDriverLisence')){
                $image = $request->file('uploadDriverLisence');
                $filename = date('Ymdhis').'.'.$image->extension();
                $image->storeAs('DriverDocs', $filename, 'public');  
                $data['uploadDriverLisence'] = $filename;
        }
        DB::table('drivers')->where('id', $id)->update($data);
        Session::flash('message', 'Record Updated Successfully');
        return Redirect('/driverShow');
    }

    public function delete($id, Request $request){
        DB::table('drivers')->where('id', $id)->delete();
        Session::flash('message', 'Record Deleted Successfully');
        return Redirect::back();
    }

}

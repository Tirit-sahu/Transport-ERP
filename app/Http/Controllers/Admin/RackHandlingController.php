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

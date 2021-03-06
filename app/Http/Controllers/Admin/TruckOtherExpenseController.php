<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;


class TruckOtherExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.truck_other_expenses');
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
        DB::table('truck_other_expenses')->insert($data);
        $request->session()->flash('message', 'New Record Added Successfully');
        return Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $truck_other_expenses = DB::table('truck_other_expenses')->orderBy('id', 'DESC')->get();
        return view('admin.report_truck_other_expenses', ['truck_other_expenses'=>$truck_other_expenses]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $truck_other_expenses = DB::table('truck_other_expenses')->where('id', $id)->first();
        return view('admin.truck_other_expenses', ['truck_other_expenses'=>$truck_other_expenses]);
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
        $data = $request->all();
        DB::table('truck_other_expenses')->where('id', $id)->update($data);
        $request->session()->flash('message', 'Record Updated Successfully');
        return Redirect('/TruckOtherExpenseShow');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

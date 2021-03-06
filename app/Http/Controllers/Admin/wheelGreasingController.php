<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Redirect;


class wheelGreasingController extends Controller
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
        return view('admin.wheelGreasing.wheel-greasing-create');
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
        unset($data['_token']);
        DB::table('wheel_greasings')
        ->insert($data);
        $request->session()->flash('message', 'New Record Created Successfully');
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
        $wheel_greasings = DB::table('wheel_greasings')
        ->orderBy('id', 'DESC')
        ->get();
        return view('admin.wheelGreasing.wheel-greasing-show', ['wheel_greasings'=>$wheel_greasings]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wheel_greasing = DB::table('wheel_greasings')->where('id', $id)->first();
        return view('admin.wheelGreasing.wheel-greasing-create', ['wheel_greasing'=>$wheel_greasing]);
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
        unset($data['_token']);
        DB::table('wheel_greasings')
        ->where('id', $id)
        ->update($data);
        $request->session()->flash('message', 'Record Updated Successfully');
        return Redirect('wheel-greasing-show');
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

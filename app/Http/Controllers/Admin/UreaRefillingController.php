<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;


class UreaRefillingController extends Controller
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
        return view('admin.urea_refillings.urea-refilling-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'liter' => 'required|numeric',
            'amount' => 'required|numeric'
        ]);

        $data = $request->all();
        unset($data['_token']);
        $data['date'] = date('Y-m-d', strtotime($request->date));
        DB::table('urea_refillings')
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
        $urea_refillings = DB::table('urea_refillings')->orderBy('id', 'DESC')->get();
        return view('admin.urea_refillings.urea-refilling-show', ['urea_refillings'=>$urea_refillings]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $urea_refillings = DB::table('urea_refillings')->where('id', $id)->first();
        return view('admin.urea_refillings.urea-refilling-create',['urea_refillings'=>$urea_refillings]);
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
        $request->validate([
            'liter' => 'required|numeric',
            'amount' => 'required|numeric'
        ]);

        $data = $request->all();
        unset($data['_token']);
        $data['date'] = date('Y-m-d', strtotime($request->date));
        DB::table('urea_refillings')
        ->where('id', $id)
        ->update($data);
        $request->session()->flash('message', 'Record Updated Successfully');
        return Redirect('urea-refilling-show');
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

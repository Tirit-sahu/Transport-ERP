<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Admin\IncomeExpensesHead;
use Illuminate\Http\Request;

class IncomeExpensesHeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heads=IncomeExpensesHead::all();
        return view('admin.inv.head.view',compact('heads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inv.head.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $head=new IncomeExpensesHead();
        $head->head_name=$request->head_name;
        $head->head_type=$request->head_type;
        $head->ipaddress=$request->getClientIp();
        $head->createdby=auth()->user()->id;

        $head->save();
        return redirect()->back()->with('message','Add Head Suceessfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\IncomeExpensesHead  $incomeExpensesHead
     * @return \Illuminate\Http\Response
     */
    public function show(IncomeExpensesHead $incomeExpensesHead)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\IncomeExpensesHead  $incomeExpensesHead
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $head=IncomeExpensesHead::find($id);
        return view('admin.inv.head.edit',compact('head'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\IncomeExpensesHead  $incomeExpensesHead
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $head=IncomeExpensesHead::find($id);
        $head->head_name=$request->head_name;
        $head->head_type=$request->head_type;
        $head->ipaddress=$request->getClientIp();
        $head->createdby=auth()->user()->id;
       
        $head->save();
        return redirect(route('head.index'))->with('message','Update Head Suceessfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\IncomeExpensesHead  $incomeExpensesHead
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $head=IncomeExpensesHead::find($id)->delete();
        return redirect()->back()->with('message','Delete Head Suceessfully.');
    }
}

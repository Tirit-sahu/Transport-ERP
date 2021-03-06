<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;

class supplierController extends Controller
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
        return view('admin.supplier.supplier-create');
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
        $data['opening_bal_date'] = date('Y-m-d', strtotime($request->opening_bal_date));
        DB::table('suppliers')
        ->insert($data);
        $request->session()->flash('message', 'New Supplier Added Successfully');
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
        $suppliers = DB::table('suppliers')->orderBy('id', 'DESC')->get();
        return view('admin.supplier.supplier-datatable', ['suppliers'=>$suppliers]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = DB::table('suppliers')->where('id', $id)->first();
        return view('admin.supplier.supplier-create', ['supplier'=>$supplier]);
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
        $data['opening_bal_date'] = date('Y-m-d', strtotime($request->opening_bal_date));
        DB::table('suppliers')
        ->where('id', $id)
        ->update($data);
        $request->session()->flash('message', 'New Supplier Added Successfully');
        return Redirect('/supplierDatatable');
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

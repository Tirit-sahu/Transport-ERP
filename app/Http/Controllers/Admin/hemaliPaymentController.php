<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;

class hemaliPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hemali_payment = DB::select("SELECT hemali_payments.id AS id, hemals.tolly_name AS tolly_name, loading_entries.loading_no AS loading_no, hemali_payments.amount AS amount, hemali_payments.date AS date FROM hemali_payments LEFT JOIN hemals ON hemali_payments.hemal = hemals.id LEFT JOIN loading_entries ON hemali_payments.loading_number = loading_entries.id");
        $hemals = DB::table('hemals')->get();
        $loading_entries = DB::table('loading_entries')->get();
        return view('admin.hemalPayment.hemali_payment', ['hemals'=>$hemals, 'loading_entries'=>$loading_entries, 'hemali_payment'=>$hemali_payment]);
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
        $myArray = array(
            'hemal'=>$request->input('hemal'),
            'loading_number'=>$request->input('loading_number'),
            'amount'=>$request->input('amount'),
            'date'=>date('Y-m-d',strtotime($request->input('date')))
        );
        DB::table('hemali_payments')->insert($myArray);
        Session::flash('message', 'New record added successfully');
        return redirect::back();
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
        $hemali_payment = DB::select("SELECT hemali_payments.id AS id, hemals.tolly_name AS tolly_name, loading_entries.loading_no AS loading_no, hemali_payments.amount AS amount, hemali_payments.date AS date FROM hemali_payments LEFT JOIN hemals ON hemali_payments.hemal = hemals.id LEFT JOIN loading_entries ON hemali_payments.loading_number = loading_entries.id");
        $hemals = DB::table('hemals')->get();
        $loading_entries = DB::table('loading_entries')->get();
        

        $hemalP = DB::table('hemali_payments')->where('id', $id)->first();
        return view('admin.hemalPayment.hemali_payment', ['hemals'=>$hemals, 'loading_entries'=>$loading_entries, 'hemali_payment'=>$hemali_payment, 'hemalP'=>$hemalP]);
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
        $where = array('id'=>$id);

        $myArray = array(
            'hemal'=>$request->input('hemal'),
            'loading_number'=>$request->input('loading_number'),
            'amount'=>$request->input('amount'),
            'date'=>date('Y-m-d',strtotime($request->input('date')))
        );
        DB::table('hemali_payments')->where($where)->update($myArray);
        Session::flash('message', 'Record Updated Successfully');
        return redirect('/admin/hemaliPayment');
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

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Redirect;
use Session;
use PDF;

class generateLTRBILLController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generateLtrBill()
    {
        return view('admin.generateBill.generateLTRBILL');
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
    public function storeLtrBill(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $insertGetId = DB::table('generate_l_t_r_b_i_l_l_s')
        ->insertGetId($data);
        $request->session()->flash('message', 'successfully Created');
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
        $generate_l_t_r_b_i_l_l_s = DB::table('generate_l_t_r_b_i_l_l_s')
        ->orderBy('id', 'DESC')
        ->get();
        return view('admin.generateBill.reportLTRBILL', ['generate_l_t_r_b_i_l_l_s'=>$generate_l_t_r_b_i_l_l_s]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function invoiceLTR($id)
    {
        $companies = DB::table('companies')->where('id', 2)->first();        
        $generate_l_t_r_b_i_l_l_s = DB::table('generate_l_t_r_b_i_l_l_s')
        ->where('id', $id)->first();
        return view('admin.generateBill.invoiceRLTBILL', ['generate_l_t_r_b_i_l_l_s'=>$generate_l_t_r_b_i_l_l_s, 'companies'=>$companies]);
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
        //
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

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;
use App\Admin\Truck;

class AccountSettingController extends Controller
{
    public function openingBal(){
        $account_settings = DB::table('account_settings')->orderBy('id', 'DESC')->get();
        return view('admin.opening_balance', ['account_settings'=>$account_settings]);
    }

    public function destroy($id)
    {
        DB::table('account_settings')->where('id', $id)->delete();
        Session::flash('success', 'Record Deleted');
        return Redirect('/openingBal');
    }

    public function store(Request $request)
    {
        $request->validate([
            'opening_bal'=>'required'
        ]);

        $myArray = array(
            'opening_bal'=>$request->input('opening_bal'),
            'created_at'=>date('Y-m-d H:i:s')
        );
        DB::table('account_settings')->insert($myArray);
        Session::flash('success', 'New Record Added');
        return Redirect('/openingBal');
    }


    public function incomeExpensesReport(Request $request){
        $FData = $request->all();
        $where = array();
        $where2 = array();
        if(!empty($FData['vehicle_no']) && !empty($FData['from_date']) && !empty($FData['to_date'])){
            $where = array('vehicle'=>$FData['vehicle_no']);
            $where2 = array('vehicle_no'=>$FData['vehicle_no']); 
            $from_date = date('Y-m-d', strtotime($FData['from_date']));
            $to_date = date('Y-m-d', strtotime($FData['to_date']));
            $loading_entries = DB::table('loading_entries')
            ->where($where2)
            ->whereBetween('loading_date',array($from_date,$to_date))
            ->get();
            $truck_other_expenses = DB::table('truck_other_expenses')
            ->where($where)
            ->whereBetween('expensesDate',array($FData['from_date'],$FData['to_date']))
            ->get(); 
        }
        
        else if(!empty($FData['vehicle_no'])){
            $where = array('vehicle'=>$FData['vehicle_no']);
            $where2 = array('vehicle_no'=>$FData['vehicle_no']);    
            $loading_entries = DB::table('loading_entries')
            ->where($where2)
            ->get();
            $truck_other_expenses = DB::table('truck_other_expenses')
            ->where($where)
            ->get();        
        }
        else{
            $loading_entries = [];
            $truck_other_expenses = [];
        }

        // dd($loading_entries);
        // $income_expenses = [];
        // if(!empty($request->customer) && !empty($request->input('from_date')) && !empty($request->input('to_date'))) {

        //     $from_date = date('Y-m-d', strtotime($request->input('from_date')));
        //     $to_date = date('Y-m-d', strtotime($request->input('to_date')));            
        //     $openfromdate = date('Y-m-d',(strtotime ( '-1 day' , strtotime ( $from_date) ) ));
        //     $opening_amt = DB::select("SELECT SUM(opening_bal) AS opening_bal FROM `account_settings`");
        //     $debitRes = DB::select("SELECT SUM(amount) AS amount FROM `income_expenses` WHERE type = 1 AND date <= '$openfromdate'");
        //     $creditRes = DB::select("SELECT SUM(amount) AS amount FROM `income_expenses` WHERE type = 2 AND date <= '$openfromdate'");
        //     $debitAmt = $debitRes[0]->amount;
        //     $creditAmt = $creditRes[0]->amount;
        //     $opening_bal = $opening_amt[0]->opening_bal;
        //     $openBalance = $opening_bal-$debitAmt+$creditAmt;
        //     $income_expenses = DB::select("SELECT * FROM `income_expenses` WHERE customer = $request->customer AND date BETWEEN '$from_date' AND '$to_date'");
        // }
        
        // else{
        //     $openBalance = 0;
        // }
        
        // $m_customers = DB::table('m_customers')->orderBy('id', 'DESC')->get();
        // ['income_expenses'=>$income_expenses, 'm_customers'=>$m_customers, 'opening_bal'=>$openBalance]
        

        $trucks = Truck::get();
        return view('admin.report_income_expenses', ['trucks'=>$trucks, 'truck_other_expenses'=>$truck_other_expenses, 'loading_entries'=>$loading_entries]);
    }




}

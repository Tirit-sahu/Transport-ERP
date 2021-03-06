<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\LoadingEntry;
use App\Admin\LoadingReceiveing;
use App\Admin\LoadingPayment;
use App\Admin\Truck;
use App\Admin\Place;
use App\Admin\Truckowner;
use App\Admin\Company;
use DB;
use App;
use PDF;
use Session;
use Redirect;


class LoadingPaymentController extends Controller
{

    public static function getValueStatic($table,$column,$key,$value)
    {
        $result = DB::table($table)
          ->where($key, '=', $value)
          ->orderBy('id','asc')
          ->value($column);
        return $result;
    }

    public static function first_record_static($table,$where)
    {
        $result = DB::table($table)->where($where)->first();
        return $result;
    }

    public static function get_record_static($table,$where)
    {
        $result = DB::table($table)->where($where)->get();
        return $result;
    }

    public function payment_invoice($id)
    {
        $loading_payments = DB::table('loading_payments')->where('id', $id)->first();
        // dd(json_decode($loading_payments->loading_receiveing_id));
        $pdf=App::make('dompdf.wrapper');       
         view()->share('loading_payments',$loading_payments);
         $pdf = PDF::loadView('admin.dispatch.payment.invoice', compact('loading_payments'));
         $pdf->setPaper('A4', 'landscape');
        return $pdf->stream();
    }

    public function submitReceivingPayment(Request $request)
    {
        $size = sizeof($request->input('loading_receiveing_id'));
        $myArray = array(
            'loading_receiveing_id' => json_encode($request->input('loading_receiveing_id')),
            'voucher_no' => $request->input('voucher_number'),
            'payment_date' => date('Y-m-d', strtotime($request->input('paymentDate')))
        );
        $insertGetId = DB::table('loading_payments')
        ->insertGetId($myArray);

        for ($i=0; $i < $size; $i++) { 
            DB::table('loading_receiveings')->where('id', $request->input('loading_receiveing_id')[$i])->update(['is_payment'=>$insertGetId]);
        }
        Session::flash('success', $insertGetId);
        return Redirect::back();
    }

    public function invoice_num ($input, $pad_len = 7, $prefix = null) {
        if ($pad_len <= strlen($input))
            trigger_error('<strong>$pad_len</strong> cannot be less than or equal to the length of <strong>$input</strong> to generate invoice number', E_USER_ERROR);
    
        if (is_string($prefix))
            return sprintf("%s%s", $prefix, str_pad($input, $pad_len, "0", STR_PAD_LEFT));
    
        return str_pad($input, $pad_len, "0", STR_PAD_LEFT);
    }


    public function receivingPayment(Request $request)
    {
        // $loading_receiveings = DB::table('loading_receiveings')->get();
        $truckowners = Truckowner::get();

        $count = DB::table('loading_payments')->count();
        $vnumber = $this->invoice_num(++$count, 5, "PV");

        $loading_receiveings = DB::select("SELECT loading_receiveings.id AS id, loading_receiveings.loading_entries_id AS loading_entries_id, loading_receiveings.receiving_date AS receiving_date, loading_receiveings.received_bag AS received_bag, loading_receiveings.received_mt AS received_mt, loading_receiveings.shortage_bag AS shortage_bag, loading_receiveings.shortage_rs AS shortage_rs, loading_receiveings.weight_gain AS weight_gain, loading_receiveings.gross_amt AS gross_amt, loading_receiveings.net_amt AS net_amt, loading_receiveings.narration AS narration, loading_entries.loading_date AS loading_date, loading_entries.loading_no AS loading_no, loading_entries.consignor AS consignor, consignors.consignor_name AS consignor_name, p1.placename AS from_place, loading_entries.consignee AS consignee, consignees.consignee_name AS consignee_name, p2.placename AS to_place, loading_entries.vehicle_no AS vehicle_no, trucks.truck_number AS truck_number, truckowners.owner_name AS owner_name, loading_entries.bag AS bag, loading_entries.weight AS weight, loading_entries.freight_rate AS freight_rate, loading_entries.diesel_advance AS diesel_advance, loading_entries.pentrol_pump AS pentrol_pump, loading_entries.commision_rate AS commision_rate, loading_entries.cash_advance AS cash_advance, loading_entries.hemal AS hemal, hemals.tolly_name AS tolly_name, loading_entries.hema_rate AS hema_rate, loading_receiveings.shortage_mt AS shortage_mt, trucks.truck_number AS truck_number, truckowners.owner_name AS owner_name, loading_receiveings.is_payment AS is_payment
        FROM loading_receiveings
        LEFT JOIN loading_entries ON loading_receiveings.loading_entries_id = loading_entries.id
        LEFT JOIN consignors ON loading_entries.consignor = consignors.id
        LEFT JOIN consignees ON loading_entries.consignee = consignees.id
        LEFT JOIN places AS p1 ON loading_entries.from_place = p1.id
        LEFT JOIN places AS p2 ON loading_entries.to_plce = p2.id
        LEFT JOIN trucks ON loading_entries.vehicle_no = trucks.id
        LEFT JOIN truckowners ON trucks.truckowner_id = truckowners.id
        LEFT JOIN hemals ON loading_entries.hemal = hemals.id
        WHERE is_payment = 0
        ");

        // dd($truckowners);
        return view('admin.payment', ['loading_receiveings'=>$loading_receiveings, 'truckowners'=>$truckowners, 'vnumber'=>$vnumber]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $receive=LoadingReceiveing::with('entry')->get();
        $loads=LoadingEntry::where('status',2)->get();
        $owners=Truckowner::all();
        $trucks=Truck::all();
        $payments=LoadingPayment::all();
        return view('admin.dispatch.payment.view',compact('payments','loads','trucks','owners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $receive=LoadingReceiveing::with('entry')->get();
        $loads=LoadingReceiveing::where('status',1)->get();
        $owners=Truckowner::all();
        $trucks=Truck::all();
    
        $vehicle_no=$_REQUEST['vehicle_no']??'';

        $owner=$_REQUEST['owner']??'';

         if($vehicle_no !='')
        $loads = $loads->where('vehicle_no',$vehicle_no);


        return view('admin.dispatch.payment.create',compact('loads','trucks','owners'));
    }

    public function getAddLoad(Request $request){
          $load_no= $request->loading_no;
         $receive=LoadingReceiveing::with('entry')->where('loading_no',$load_no)->where('status',1)->first();
                 $trucks=Truck::where('id',$receive->entry->vehicle_no)->first();
                  $receive->truck_number=$trucks->truck_number;
                                 $owners=Truckowner::where('id',$trucks->truckowner_id)->first();
                                    $receive->owner_name=$owners->owner_name;
                                    $from=Place::where('id',$receive->entry->from_place)->first();
                                    $receive->from_name=$from->placename;
                                    $toplce=Place::where('id',$receive->entry->to_plce)->first();
                                        $receive->to_place=$toplce->placename;
        return json_encode($receive);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $payment=new LoadingPayment();
        $request->all();

        $sizeof = sizeof($request->loading_no);
       for($i=0; $i<$sizeof; $i++)
       {
        $myArray = array(
            'loading_id' => $request->loading_no[$i],
            'narretion' => $request->narresation[$i],
            'invoice_no' => $request->invoice,
            'payment_date' => date('Y-m-d',strtotime($request->payment_date)),
            'status' => 1,
            'createdby' => auth()->user()->id,
            'ipaddress'=> $request->getClientIp(),
        );
       
        DB::table('loading_payments')
        ->insert($myArray);
       

         $where = array('id'=>$request->loading_no[$i]);
         DB::table('loading_receiveings')
         ->where($where)
         ->update(['status'=>2]);

       
       }
    
        return redirect()->back()->with('message','Payment Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $payment=LoadingPayment::with('receice')->where('invoice_no',$id)->get();
        // $coms=Company::all();
        
        //  $pdf=App::make('dompdf.wrapper');       
        //  view()->share('payment',$payment);
        //  $pdf = PDF::loadView('admin.dispatch.payment.invoice', compact('payment','coms'));
        //  $pdf->setPaper('A4', 'landscape');
        // return $pdf->stream();
    }

    public function paymentReport()
    {
        $loading_payments = DB::table('loading_payments')->orderBy('id', 'DESC')->get();
        return view('admin.dispatch.payment.view', ['payments'=>$loading_payments]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

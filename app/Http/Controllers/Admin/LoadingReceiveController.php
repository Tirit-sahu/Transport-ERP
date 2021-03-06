<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Place;
use App\Admin\State;
use App\Admin\Consignor;
use App\Admin\Petrolpump;
use App\Admin\Truckowner;
use App\Admin\Consignee;
use App\Admin\Truck;
use App\Admin\LoadingEntry;
use App\Admin\Trucktype;
use App\Admin\ItemCategory;
use App\Admin\unit;
use App\Admin\TruckDocument;
use App\Admin\LoadingReceiveing;
use DB;
use Redirect;

class LoadingReceiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dispatch.receive.view');
    }

    /**
     * TIRIT SAHU
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) 
    {
        $loading_receiveings = '';

        if(!empty($request->vehicle_no) && !empty($request->from_date) && !empty($request->to_date)){
            $from_date = date('Y-m-d',strtotime($request->from_date));
            $to_date = date('Y-m-d',strtotime($request->to_date));

            $loading_receiveings = DB::select("SELECT loadintrucksgross_amt AS gross_amt, loading_receiveings.net_amt AS net_amt, loading_receiveings.narration AS narration, loading_entries.loading_date AS loading_date, loading_entries.loading_no AS loading_no, loading_entries.consignor AS consignor, consignors.consignor_name AS consignor_name, p1.placename AS from_place, loading_entries.consignee AS consignee, consignees.consignee_name AS consignee_name, p2.placename AS to_place, loading_entries.vehicle_no AS vehicle_no, trucks.truck_number AS truck_number, truckowners.owner_name AS owner_name, loading_entries.bag AS bag, loading_entries.weight AS weight, loading_entries.freight_rate AS freight_rate, loading_entries.diesel_advance AS diesel_advance, loading_entries.pentrol_pump AS pentrol_pump, loading_entries.commision_rate AS commision_rate, loading_entries.cash_advance AS cash_advance, loading_entries.hemal AS hemal, hemals.tolly_name AS tolly_name, loading_entries.hema_rate AS hema_rate, loading_receiveings.shortage_mt AS shortage_mt, loading_receiveings.is_payment AS is_payment
            FROM loading_receiveings
            LEFT JOIN loading_entries ON loading_receiveings.loading_entries_id = loading_entries.id
            LEFT JOIN consignors ON loading_entries.consignor = consignors.id
            LEFT JOIN consignees ON loading_entries.consignee = consignees.id
            LEFT JOIN places AS p1 ON loading_entries.from_place = p1.id
            LEFT JOIN places AS p2 ON loading_entries.to_plce = p2.id
            LEFT JOIN trucks ON loading_entries.vehicle_no = trucks.id
            LEFT JOIN truckowners ON trucks.truckowner_id = truckowners.id
            LEFT JOIN hemals ON loading_entries.hemal = hemals.id 
            WHERE loading_entries.vehicle_no = $request->vehicle_no AND loading_receiveings.receiving_date between '$from_date' and '$to_date'");
        }

        else if(!empty($request->loading_no) && !empty($request->from_date) && !empty($request->to_date)){

            $from_date = date('Y-m-d',strtotime($request->from_date));
            $to_date = date('Y-m-d',strtotime($request->to_date));

            $loading_receiveings = DB::select("SELECT loading_receiveings.id AS id, loading_receiveings.loading_entries_id AS loading_entries_id, loading_receiveings.receiving_date AS receiving_date, loading_receiveings.received_bag AS received_bag, loading_receiveings.received_mt AS received_mt, loading_receiveings.shortage_bag AS shortage_bag, loading_receiveings.shortage_rs AS shortage_rs, loading_receiveings.weight_gain AS weight_gain, loading_receiveings.gross_amt AS gross_amt, loading_receiveings.net_amt AS net_amt, loading_receiveings.narration AS narration, loading_entries.loading_date AS loading_date, loading_entries.loading_no AS loading_no, loading_entries.consignor AS consignor, consignors.consignor_name AS consignor_name, p1.placename AS from_place, loading_entries.consignee AS consignee, consignees.consignee_name AS consignee_name, p2.placename AS to_place, loading_entries.vehicle_no AS vehicle_no, trucks.truck_number AS truck_number, truckowners.owner_name AS owner_name, loading_entries.bag AS bag, loading_entries.weight AS weight, loading_entries.freight_rate AS freight_rate, loading_entries.diesel_advance AS diesel_advance, loading_entries.pentrol_pump AS pentrol_pump, loading_entries.commision_rate AS commision_rate, loading_entries.cash_advance AS cash_advance, loading_entries.hemal AS hemal, hemals.tolly_name AS tolly_name, loading_entries.hema_rate AS hema_rate, loading_receiveings.shortage_mt AS shortage_mt, loading_receiveings.is_payment AS is_payment 
            FROM loading_receiveings
            LEFT JOIN loading_entries ON loading_receiveings.loading_entries_id = loading_entries.id
            LEFT JOIN consignors ON loading_entries.consignor = consignors.id
            LEFT JOIN consignees ON loading_entries.consignee = consignees.id
            LEFT JOIN places AS p1 ON loading_entries.from_place = p1.id
            LEFT JOIN places AS p2 ON loading_entries.to_plce = p2.id
            LEFT JOIN trucks ON loading_entries.vehicle_no = trucks.id
            LEFT JOIN truckowners ON trucks.truckowner_id = truckowners.id
            LEFT JOIN hemals ON loading_entries.hemal = hemals.id 
            WHERE loading_entries.loading_no = $request->loading_no AND loading_receiveings.receiving_date between '$from_date' and '$to_date'");
        }

        

        else if(!empty($request->vehicle_no) && !empty($request->loading_no)){

            $loading_receiveings = DB::select("SELECT loading_receiveings.id AS id, loading_receiveings.loading_entries_id AS loading_entries_id, loading_receiveings.receiving_date AS receiving_date, loading_receiveings.received_bag AS received_bag, loading_receiveings.received_mt AS received_mt, loading_receiveings.shortage_bag AS shortage_bag, loading_receiveings.shortage_rs AS shortage_rs, loading_receiveings.weight_gain AS weight_gain, loading_receiveings.gross_amt AS gross_amt, loading_receiveings.net_amt AS net_amt, loading_receiveings.narration AS narration, loading_entries.loading_date AS loading_date, loading_entries.loading_no AS loading_no, loading_entries.consignor AS consignor, consignors.consignor_name AS consignor_name, p1.placename AS from_place, loading_entries.consignee AS consignee, consignees.consignee_name AS consignee_name, p2.placename AS to_place, loading_entries.vehicle_no AS vehicle_no, trucks.truck_number AS truck_number, truckowners.owner_name AS owner_name, loading_entries.bag AS bag, loading_entries.weight AS weight, loading_entries.freight_rate AS freight_rate, loading_entries.diesel_advance AS diesel_advance, loading_entries.pentrol_pump AS pentrol_pump, loading_entries.commision_rate AS commision_rate, loading_entries.cash_advance AS cash_advance, loading_entries.hemal AS hemal, hemals.tolly_name AS tolly_name, loading_entries.hema_rate AS hema_rate, loading_receiveings.shortage_mt AS shortage_mt, loading_receiveings.is_payment AS is_payment
            FROM loading_receiveings
            LEFT JOIN loading_entries ON loading_receiveings.loading_entries_id = loading_entries.id
            LEFT JOIN consignors ON loading_entries.consignor = consignors.id
            LEFT JOIN consignees ON loading_entries.consignee = consignees.id
            LEFT JOIN places AS p1 ON loading_entries.from_place = p1.id
            LEFT JOIN places AS p2 ON loading_entries.to_plce = p2.id
            LEFT JOIN trucks ON loading_entries.vehicle_no = trucks.id
            LEFT JOIN truckowners ON trucks.truckowner_id = truckowners.id
            LEFT JOIN hemals ON loading_entries.hemal = hemals.id WHERE loading_entries.vehicle_no = $request->vehicle_no AND loading_receiveings.loading_entries_id = $request->loading_no");

    }

        else if(!empty($request->from_date) && !empty($request->to_date)){

            $from_date = date('Y-m-d',strtotime($request->from_date));
            $to_date = date('Y-m-d',strtotime($request->to_date));

            $loading_receiveings = DB::select("SELECT loading_receiveings.id AS id, loading_receiveings.loading_entries_id AS loading_entries_id, loading_receiveings.receiving_date AS receiving_date, loading_receiveings.received_bag AS received_bag, loading_receiveings.received_mt AS received_mt, loading_receiveings.shortage_bag AS shortage_bag, loading_receiveings.shortage_rs AS shortage_rs, loading_receiveings.weight_gain AS weight_gain, loading_receiveings.gross_amt AS gross_amt, loading_receiveings.net_amt AS net_amt, loading_receiveings.narration AS narration, loading_entries.loading_date AS loading_date, loading_entries.loading_no AS loading_no, loading_entries.consignor AS consignor, consignors.consignor_name AS consignor_name, p1.placename AS from_place, loading_entries.consignee AS consignee, consignees.consignee_name AS consignee_name, p2.placename AS to_place, loading_entries.vehicle_no AS vehicle_no, trucks.truck_number AS truck_number, truckowners.owner_name AS owner_name, loading_entries.bag AS bag, loading_entries.weight AS weight, loading_entries.freight_rate AS freight_rate, loading_entries.diesel_advance AS diesel_advance, loading_entries.pentrol_pump AS pentrol_pump, loading_entries.commision_rate AS commision_rate, loading_entries.cash_advance AS cash_advance, loading_entries.hemal AS hemal, hemals.tolly_name AS tolly_name, loading_entries.hema_rate AS hema_rate, loading_receiveings.shortage_mt AS shortage_mt, loading_receiveings.is_payment AS is_payment FROM loading_receiveings
            LEFT JOIN loading_entries ON loading_receiveings.loading_entries_id = loading_entries.id
            LEFT JOIN consignors ON loading_entries.consignor = consignors.id
            LEFT JOIN consignees ON loading_entries.consignee = consignees.id
            LEFT JOIN places AS p1 ON loading_entries.from_place = p1.id
            LEFT JOIN places AS p2 ON loading_entries.to_plce = p2.id
            LEFT JOIN trucks ON loading_entries.vehicle_no = trucks.id
            LEFT JOIN truckowners ON trucks.truckowner_id = truckowners.id
            LEFT JOIN hemals ON loading_entries.hemal = hemals.id 
            WHERE loading_receiveings.receiving_date between '$from_date' and '$to_date'");
        }

        else if(!empty($request->loading_no)){
            $loading_receiveings = DB::select("SELECT loading_receiveings.id AS id, loading_receiveings.loading_entries_id AS loading_entries_id, loading_receiveings.receiving_date AS receiving_date, loading_receiveings.received_bag AS received_bag, loading_receiveings.received_mt AS received_mt, loading_receiveings.shortage_bag AS shortage_bag, loading_receiveings.shortage_rs AS shortage_rs, loading_receiveings.weight_gain AS weight_gain, loading_receiveings.gross_amt AS gross_amt, loading_receiveings.net_amt AS net_amt, loading_receiveings.narration AS narration, loading_entries.loading_date AS loading_date, loading_entries.loading_no AS loading_no, loading_entries.consignor AS consignor, consignors.consignor_name AS consignor_name, p1.placename AS from_place, loading_entries.consignee AS consignee, consignees.consignee_name AS consignee_name, p2.placename AS to_place, loading_entries.vehicle_no AS vehicle_no, trucks.truck_number AS truck_number, truckowners.owner_name AS owner_name, loading_entries.bag AS bag, loading_entries.weight AS weight, loading_entries.freight_rate AS freight_rate, loading_entries.diesel_advance AS diesel_advance, loading_entries.pentrol_pump AS pentrol_pump, loading_entries.commision_rate AS commision_rate, loading_entries.cash_advance AS cash_advance, loading_entries.hemal AS hemal, hemals.tolly_name AS tolly_name, loading_entries.hema_rate AS hema_rate, loading_receiveings.shortage_mt AS shortage_mt, loading_receiveings.is_payment AS is_payment
            FROM loading_receiveings
            LEFT JOIN loading_entries ON loading_receiveings.loading_entries_id = loading_entries.id
            LEFT JOIN consignors ON loading_entries.consignor = consignors.id
            LEFT JOIN consignees ON loading_entries.consignee = consignees.id
            LEFT JOIN places AS p1 ON loading_entries.from_place = p1.id
            LEFT JOIN places AS p2 ON loading_entries.to_plce = p2.id
            LEFT JOIN trucks ON loading_entries.vehicle_no = trucks.id
            LEFT JOIN truckowners ON trucks.truckowner_id = truckowners.id
            LEFT JOIN hemals ON loading_entries.hemal = hemals.id WHERE loading_receiveings.loading_entries_id = $request->loading_no");
        
        }

        else if(!empty($request->vehicle_no)){

            $loading_receiveings = DB::select("SELECT loading_receiveings.id AS id, loading_receiveings.loading_entries_id AS loading_entries_id, loading_receiveings.receiving_date AS receiving_date, loading_receiveings.received_bag AS received_bag, loading_receiveings.received_mt AS received_mt, loading_receiveings.shortage_bag AS shortage_bag, loading_receiveings.shortage_rs AS shortage_rs, loading_receiveings.weight_gain AS weight_gain, loading_receiveings.gross_amt AS gross_amt, loading_receiveings.net_amt AS net_amt, loading_receiveings.narration AS narration, loading_entries.loading_date AS loading_date, loading_entries.loading_no AS loading_no, loading_entries.consignor AS consignor, consignors.consignor_name AS consignor_name, p1.placename AS from_place, loading_entries.consignee AS consignee, consignees.consignee_name AS consignee_name, p2.placename AS to_place, loading_entries.vehicle_no AS vehicle_no, trucks.truck_number AS truck_number, truckowners.owner_name AS owner_name, loading_entries.bag AS bag, loading_entries.weight AS weight, loading_entries.freight_rate AS freight_rate, loading_entries.diesel_advance AS diesel_advance, loading_entries.pentrol_pump AS pentrol_pump, loading_entries.commision_rate AS commision_rate, loading_entries.cash_advance AS cash_advance, loading_entries.hemal AS hemal, hemals.tolly_name AS tolly_name, loading_entries.hema_rate AS hema_rate, loading_receiveings.shortage_mt AS shortage_mt, loading_receiveings.is_payment AS is_payment
            FROM loading_receiveings
            LEFT JOIN loading_entries ON loading_receiveings.loading_entries_id = loading_entries.id
            LEFT JOIN consignors ON loading_entries.consignor = consignors.id
            LEFT JOIN consignees ON loading_entries.consignee = consignees.id
            LEFT JOIN places AS p1 ON loading_entries.from_place = p1.id
            LEFT JOIN places AS p2 ON loading_entries.to_plce = p2.id
            LEFT JOIN trucks ON loading_entries.vehicle_no = trucks.id
            LEFT JOIN truckowners ON trucks.truckowner_id = truckowners.id
            LEFT JOIN hemals ON loading_entries.hemal = hemals.id WHERE loading_entries.vehicle_no = $request->vehicle_no");

    }
       
        else{

                $loading_receiveings = DB::select("SELECT loading_receiveings.id AS id, loading_receiveings.loading_entries_id AS loading_entries_id, loading_receiveings.receiving_date AS receiving_date, loading_receiveings.received_bag AS received_bag, loading_receiveings.received_mt AS received_mt, loading_receiveings.shortage_bag AS shortage_bag, loading_receiveings.shortage_rs AS shortage_rs, loading_receiveings.weight_gain AS weight_gain, loading_receiveings.gross_amt AS gross_amt, loading_receiveings.net_amt AS net_amt, loading_receiveings.narration AS narration, loading_entries.loading_date AS loading_date, loading_entries.loading_no AS loading_no, loading_entries.consignor AS consignor, consignors.consignor_name AS consignor_name, p1.placename AS from_place, loading_entries.consignee AS consignee, consignees.consignee_name AS consignee_name, p2.placename AS to_place, loading_entries.vehicle_no AS vehicle_no, trucks.truck_number AS truck_number, truckowners.owner_name AS owner_name, loading_entries.bag AS bag, loading_entries.weight AS weight, loading_entries.freight_rate AS freight_rate, loading_entries.diesel_advance AS diesel_advance, loading_entries.pentrol_pump AS pentrol_pump, loading_entries.commision_rate AS commision_rate, loading_entries.cash_advance AS cash_advance, loading_entries.hemal AS hemal, hemals.tolly_name AS tolly_name, loading_entries.hema_rate AS hema_rate, loading_receiveings.shortage_mt AS shortage_mt, loading_receiveings.is_payment AS is_payment, loading_entries.diesel_advance_ltr AS diesel_advance_ltr
        FROM loading_receiveings
        LEFT JOIN loading_entries ON loading_receiveings.loading_entries_id = loading_entries.id
        LEFT JOIN consignors ON loading_entries.consignor = consignors.id
        LEFT JOIN consignees ON loading_entries.consignee = consignees.id
        LEFT JOIN places AS p1 ON loading_entries.from_place = p1.id
        LEFT JOIN places AS p2 ON loading_entries.to_plce = p2.id
        LEFT JOIN trucks ON loading_entries.vehicle_no = trucks.id
        LEFT JOIN truckowners ON trucks.truckowner_id = truckowners.id
        LEFT JOIN hemals ON loading_entries.hemal = hemals.id");

        }
        
        $trucks = Truck::get();
        $loading_number = LoadingEntry::where('status', 1)->get();

        return view('admin.dispatch.receive.create',compact('loading_receiveings', 'trucks', 'loading_number'));
    }

    /**
     * TIRIT
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $update=DB::table('loading_receiveings')->where('loading_entries_id',$request->loading_entries_id)->count();
        if($update!=0){
            $myArray = array(
                'receiving_date'=>date('Y-m-d',strtotime($request->receiving_date)),
                'received_bag'=>$request->received_bag,
                'received_mt'=>$request->received_mt,
                'shortage_bag'=>$request->shortage_bag,
                'shortage_mt'=>$request->shortage_mt,
                'shortage_rs'=>isset($request->shortage_rs)?$request->shortage_rs:0,
                'shortage_mt_rs'=>isset($request->shortage_mt_rs)?$request->shortage_mt_rs:0,
                'weight_gain'=>isset($request->weight_gain)?$request->weight_gain:0,
                'gross_amt'=>$request->gross_amt,
                'net_amt'=>$request->net_amt,
                'narration'=>isset($request->naration)?$request->naration:''
            );
            $where = array('id'=>$request->loading_entries_id);
            DB::table('loading_receiveings')->where($where)->update($myArray);
            return 2;

        }else{            
            $myArray = array(
                'loading_entries_id'=>$request->loading_entries_id,
                'receiving_date'=>date('Y-m-d',strtotime($request->receiving_date)),
                'received_bag'=>$request->received_bag,
                'received_mt'=>$request->received_mt,
                'shortage_bag'=>$request->shortage_bag,
                'shortage_mt'=>isset($request->shortage_mt)?$request->shortage_mt:0,
                'shortage_rs'=>isset($request->shortage_rs)?$request->shortage_rs:0,
                'shortage_mt_rs'=>isset($request->shortage_mt_rs)?$request->shortage_mt_rs:0,
                'weight_gain'=>isset($request->weight_gain)?$request->weight_gain:0,
                'gross_amt'=>$request->gross_amt,
                'net_amt'=>$request->net_amt,
                'narration'=>isset($request->naration)?$request->naration:'',
                'status'=>0,
                'is_payment'=>0
            );
            DB::table('loading_receiveings')->insert($myArray);
            DB::table('loading_entries')->where('id', $request->loading_entries_id)->update(['status'=>1]); // received status = 1
            return 1;

        }
        

    }

    /**
     * Display the specified resource. TIRIT SAHU
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showReceivingEntry()
    {

        $receivedEntry = DB::table('loading_receiveings')->where('is_payment', 0)->get();
        $i=1;
        $receivedEntryRow='';
        foreach($receivedEntry as $row){
            $loading_entry = DB::table('loading_entries')->where('id', $row->loading_entries_id)->first();
            $vehicle_no = $this->getValue('trucks', 'truck_number', 'id', $loading_entry->vehicle_no);
            $from_place = $this->getValue('places', 'placename', 'id', $loading_entry->from_place);
            $to_plce = $this->getValue('places', 'placename', 'id', $loading_entry->to_plce);
            $receivedEntryRow.='
            <tr>
							<td>'.$i.'</td>
                            <td>'.date('d-m-Y',strtotime($loading_entry->loading_date)).'</td>
                            <td>'.date('d-m-Y',strtotime($row->receiving_date)).'</td>
							<td>'.$loading_entry->loading_no.'</td>
							<td>'.$vehicle_no.'</td>
							<td >'.$loading_entry->weight.'</td>
							<td >'.$loading_entry->bag.'</td>
							<td >'.$loading_entry->freight_rate.'</td>
							<td >'.$from_place.'</td>
							<td >'.$to_plce.'</td>
							<td>

							
							<a onclick="receiving_edit('.$row->id.')" class="btn" rel="tooltip" title="Edit">
							<i class="fa fa-edit"></i>
							</a>
							<a href="#" class="btn" rel="tooltip" title="Delete">
							<i class="fa fa-times"></i>
							</a>
							</td>
							</tr>
        ';
        ++$i;
        }
        return $receivedEntryRow;
    }


    public function getValue($table,$column,$key,$value)
    {
        $result = DB::table($table)
          ->where($key, '=', $value)
          ->orderBy('id','asc')
          ->value($column);
        return $result;
    }

    public static function select_record($table)
    {
        return 'HELLO';
        //return DB::table($table)->where($key, $value)->first();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editReceivingEntry(Request $request)
    {    
        $loading_receiveings = LoadingReceiveing::where('id', $request->id)->first(); 
        $loading_entries = LoadingEntry::where('id', $loading_receiveings->loading_entries_id)->first();                
        $from_place = Place::where('id', $loading_entries->from_place)->value('placename');
        $to_place =   Place::where('id', $loading_entries->to_plce)->value('placename');
        $trucks = Truck::where('id', $loading_entries->vehicle_no)->first();
        $truckowners =  Truckowner::where('id', $trucks->truckowner_id)->value('owner_name');
       
        $data = array(
            'loading_receiveings'=>$loading_receiveings,
            'loading_entries'=>$loading_entries,
            'from_place'=>$from_place,
            'to_place'=>$to_place,
            'trucks'=>$trucks,
            'truckowners'=>$truckowners
        );
        return json_encode($data);
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
        $count = DB::table('loading_receiveings')->where('id', $id)->value('is_payment');
        if($count > 0){
            return Redirect::back()->with('error','We Can\'t delete, these are dependent to payment.');
        }else{
            $count = DB::table('loading_receiveings')->where('id', $id)->delete();
            return Redirect::back()->with('message','Delete Load Entry Successfully.');
        }
        
    }

    public function receive(Request $request)
    {
        $recupdate=LoadingReceiveing::where('loading_no',$request->id)->first();


        if($recupdate)
        {     
            $receiving_date=date('Y-m-d',strtotime($request->receiving_date));
            $recupdate->receiving_date=$receiving_date;
            $recupdate->received_mt=$request->receiving_mt;
            $recupdate->type=$request->shortagetype;
            $recupdate->shortage=$request->shiortage;
            $recupdate->narration=$request->narres;
            $recupdate->ipaddress=$request->getClientIp();
            $recupdate->createdby=auth()->user()->id;
            if($rec){
                $recupdate=LoadingEntry::find($request->id);
                $recupdate->status=2;
                $recupdate->save();
            }
            $recupdate->save();
            return "Updated";
        }
        else{
            $receive=new LoadingReceiveing();
            $receiving_date=date('Y-m-d',strtotime($request->receiving_date));
            $receive->receiving_date=$receiving_date;
            $receive->loading_no=$request->id;
            $receive->received_mt=$request->receiving_mt;
            $receive->type=$request->shortagetype;
            $receive->shortage=$request->shiortage;
            $receive->narration=$request->narres;
            $receive->ipaddress=$request->getClientIp();
            $receive->createdby=auth()->user()->id;
            $rec=$receive->save();
            if($rec){
                $load=LoadingEntry::find($request->id);
                $load->status=2;
                $load->save();
            }
            return "Save";
        }
    }


    // public function getTruckNumber(Request $request){
        
    //      $loads=LoadingEntry::where('vehicle_no',$request->truck_number)->get();
    //     $select_truck='';
    //     $select_truck.="<option value=''>Select </option>";
    //     foreach ($loads as $load) {
    //         $select_truck.="<option value='$load->id'>$load->loading_no</option>";
    //     }
    //     return $select_truck;

    // }

}

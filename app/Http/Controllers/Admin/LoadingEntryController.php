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
use App\Admin\Trucktype;
use App\Admin\LoadingEntry;
use App\Admin\LoadingReceiveing;
use App\Admin\Item;
use App\Admin\ItemCategory;
use App\Admin\unit;
use App\Admin\hemal;
use Illuminate\Support\Facades\Validator;
use DB;
use App;
use PDF;
use Redirect;

class LoadingEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $loading_entries_qry = LoadingEntry::query();   
        $loading_entries_qry->orderBy('id','DESC');

        $condition = '1=1';

        if (!empty($request->vehicle)) {
            $loading_entries_qry->where('vehicle_no', $request->vehicle);
            $condition .= ' AND vehicle_no='.$request->vehicle;
        }

        if (!empty($request->consignor)) {
            $loading_entries_qry->where('consignor', $request->consignor);
            $condition .= ' AND consignor='.$request->consignor;
        }

        if (!empty($request->consignee)) {
            $loading_entries_qry->where('consignee', $request->consignee);
            $condition .= ' AND consignee='.$request->consignee;
        }  
        
        if (!empty($request->from_place)) {
            $loading_entries_qry->where('from_place', $request->from_place);
            $condition .= ' AND from_place='.$request->from_place;
        }

        if (!empty($request->to_place)) {
            $loading_entries_qry->where('to_plce', $request->to_place);
            $condition .= ' AND to_plce='.$request->to_place;
        }

        

        $loads = $loading_entries_qry->paginate(10)->appends(request()->query());
        

        $tfoot = DB::select("SELECT SUM(weight) AS weight, SUM(commision_rate) AS commision_rate, SUM(diesel_advance) AS diesel_advance, SUM(diesel_advance_ltr) AS diesel_advance_ltr, SUM(cash_advance) AS cash_advance FROM `loading_entries` WHERE $condition");
        $tfootData = $tfoot[0];
        return view('admin.dispatch.load.view', ['loads'=>$loads, 'tfootData'=>$tfootData]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //return Helpers::hi();
        $trucks=Truck::all();
        $consignors=Consignor::all();
        $places=Place::all();
        $states=State::all();
        $consignees=Consignee::all();
        $petrolpumps=Petrolpump::all();
        $owners=Truckowner::all();
        $types=Trucktype::all();
        $units=unit::all();

        return view('admin.dispatch.load.create',compact('trucks','consignors','places','consignees','petrolpumps','owners','types','states',));
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
            'loading_date' => 'required',
            'loading_no' => 'required',
            'vehicle_no' => 'required',
            'weight' => 'required', 
            'bag' => 'required', 
            'consignor' => 'required',
            'from_place' => 'required', 
            'consignee' => 'required',
            'to_plce' => 'required',
            'loading_type' => 'required'

        ]);
        
        $loading_no = $request->loading_no;
        $count = DB::table('loading_entries')->where('loading_no', $request->loading_no)->count();
        if($count != 0){
            $loading_no = $this->getcode();
        }
        
        $load=new LoadingEntry();
        $load->loading_date=date('Y-m-d',strtotime($request->loading_date));
        $load->loading_no=$loading_no;
        $load->vehicle_no=$request->vehicle_no;
        $load->weight=$request->weight;
        $load->item_master=$request->item_master;
        $load->bag=isset($request->bag)?$request->bag:0;
        $load->freight_rate=isset($request->freight_rate)?$request->freight_rate:0;
        $load->commision_rate=isset($request->commision_rate)?$request->commision_rate:0;
        $load->consignor=isset($request->consignor)?$request->consignor:0;
        $load->from_place=$request->from_place;
        $load->consignee=isset($request->consignee)?$request->consignee:0;
        $load->to_plce=isset($request->to_plce)?$request->to_plce:0;
        $load->diesel_advance=isset($request->diesel_advance)?$request->diesel_advance:0;
        $load->diesel_advance_ltr=isset($request->diesel_advance_ltr)?$request->diesel_advance_ltr:0;
        $load->pentrol_pump=isset($request->pentrol_pump)?$request->pentrol_pump:0;
        $load->cash_advance=isset($request->cash_advance)?$request->cash_advance:0;
        $load->hemal=isset($request->hemal)?$request->hemal:0;
        $load->hema_rate=isset($request->hemal_rate)?$request->hemal_rate:0;
        $load->loading_type=isset($request->loading_type)?$request->loading_type:'';
        $load->ipaddress=$request->getClientIp();
        $load->createdby=auth()->user()->id;
        $load->save();
        return redirect()->back()->with('message','Loading Entry Added Successfully');

    }


    public function getcode()
	{ 
		$num = LoadingEntry::max('loading_no');
		
	++$num; // add 1;
	$len = strlen($num);
	for($i=$len; $i< 5; ++$i) {
	$num = '0'.$num;
	}
	return $num;
	}

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\LoadingEntry  $loadingEntry
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $load=LoadingEntry::find($id);
        $pdf=App::make('dompdf.wrapper');
        $data="hello Tarac";

         view()->share('load',$load);
         $pdf = PDF::loadView('admin.dispatch.load.invoice', $load);
         $pdf->setPaper('A5', 'landscape');
        return $pdf->stream();
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\LoadingEntry  $loadingEntry
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trucks=Truck::all();
        $consignors=Consignor::all();
        $places=Place::all();
        $consignees=Consignee::all();
        $petrolpumps=Petrolpump::all();
        $types=Trucktype::all(); 
        $owners=Truckowner::all();
        $states=State::all();
        $cates=ItemCategory::all();
        $units=unit::all();

        $load=LoadingEntry::find($id);
        
        return view('admin.dispatch.load.edit',compact('trucks','consignors','places','consignees','petrolpumps','load', 'owners', 'types', 'states', 'cates', 'units'));
    }

    public function getEditData(Request $request)
    {
        return "h";
    }

    public function getTruckTrip(Request $request)
    {
        $vehicle = $request->id;
        $loading_entries = DB::select("SELECT *
        FROM loading_entries
        WHERE MONTH(loading_date) = MONTH(CURRENT_DATE())
        AND YEAR(loading_date) = YEAR(CURRENT_DATE()) AND vehicle_no = $vehicle");

        $trip = DB::select("SELECT COUNT(*) AS countTrip
        FROM loading_entries
        WHERE MONTH(loading_date) = MONTH(CURRENT_DATE())
        AND YEAR(loading_date) = YEAR(CURRENT_DATE()) AND vehicle_no = $vehicle");
        $totalTrip = $trip[0]->countTrip;

        $weightMT = DB::select("SELECT SUM(weight) AS weightMT
        FROM loading_entries
        WHERE MONTH(loading_date) = MONTH(CURRENT_DATE())
        AND YEAR(loading_date) = YEAR(CURRENT_DATE()) AND vehicle_no = $vehicle");
        $totalMT = $weightMT[0]->weightMT;    
        
        $html = '';
        $n=0;
        foreach($loading_entries as $row){
            $from_place = $this->getValue('places','placename','id',$row->from_place);
            $to_plce = $this->getValue('places','placename','id',$row->to_plce);
            $html.='
                <tr>
                <td>'.++$n.'</td>
                <td>'.date('d-m-Y', strtotime($row->loading_date)).'</td>
                <td>'.$row->weight.'</td>
                <td>'.$from_place.'</td>
                <td>'.$to_plce.'</td>
                </tr>
            ';
        }

        $TripDetails = array('totalTrip'=>$totalTrip,'totalMT'=>$totalMT,'html'=>$html);
        return json_encode($TripDetails);

    }


    public function getValue($table,$column,$key,$value)
    {
        $result = DB::table($table)
          ->where($key, '=', $value)
          ->orderBy('id','asc')
          ->value($column);
        return $result;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\LoadingEntry  $loadingEntry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $request->validate([
            'loading_date' => 'required',
            'loading_no' => 'required',
            'vehicle_no' => 'required',
            'weight' => 'required', 
            'bag' => 'required', 
            'consignor' => 'required',
            'from_place' => 'required', 
            'consignee' => 'required',
            'to_plce' => 'required',

        ]);


        $load=LoadingEntry::find($id);
        $load->loading_date=$request->loading_date;
        $load->loading_no=$request->loading_no;
        $load->vehicle_no=$request->vehicle_no;
        $load->item_master=$request->item_master;
        $load->weight=$request->weight;
        $load->bag=$request->bag;
        $load->freight_rate=$request->freight_rate;
        $load->commision_rate=$request->commision_rate;
        $load->consignor=$request->consignor;
        $load->from_place=$request->from_place;
        $load->consignee=$request->consignee;
        $load->to_plce=$request->to_plce;
        $load->diesel_advance=$request->diesel_advance;
        $load->diesel_advance_ltr=$request->diesel_advance_ltr;
        $load->pentrol_pump=$request->pentrol_pump;
        $load->cash_advance=$request->cash_advance;
        $load->ipaddress=$request->getClientIp();
        $load->createdby=auth()->user()->id;
        $load->hemal=$request->hemal;
        $load->hema_rate=$request->hemal_rate;
        $load->loading_type=isset($request->loading_type)?$request->loading_type:'';
        $load->save();
        return redirect(route('load.index'))->with('message','Load Entry Successfully Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\LoadingEntry  $loadingEntry
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count = DB::table('loading_receiveings')->where('loading_entries_id', $id)->count();
        if($count == 0){
            DB::table('loading_entries')->where('id', $id)->delete();
            return Redirect::back()->with('message','Delete Load Entry Successfully.');
        }else{
            return Redirect::back()->with('error','We Can\'t delete, these are dependent to receiving.');
        }
        
    }


    public function vehicle(Request $request){

         
         $rules=[
            'truck_number' => 'required|max:255|unique:trucks',
            'owner_name' => 'required|max:255',
            'tructype_id'=>'required',
            
        ];

        $messages=[
            'truck_number.required'=>'Truck Number is required. Please fill-up.',
            'truck_number.max'=>'Truck Number should not be greater then 255.',
            'truck_number.unique'=>'Truck Number is Already save.',
            
        
            'owner_name.required'=>'Truck Onwer Name is required.',
            'tructype_id.required'=>'Truck Type is required',
            
        ];

        $validator = Validator::make($request->all(), $rules, $messages);


         if ($validator->fails()) {
            return redirect(Route())->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $vehicle=new Truck();
        $vehicle->truck_number=$request->truck_number;
        $vehicle->truckowner_id=$request->owner_name;
        $vehicle->tructype_id=$request->tructype_id;
        // $vehicle->ipaddress=$request->getClientIp();
        // $vehicle->createdby=auth()->user()->id;
        $vehicle->save();
        return $vehicle;
    }

    public function getVehicle(){
        $trucks=Truck::all();
        $select_truck='';
        $select_truck.="<option value=''>Select Vehicle Number</option>";
        foreach ($trucks as $truck) {
            $select_truck.="<option value='$truck->id'>$truck->truck_number</option>";
        }
        return $select_truck;


    }


    public function getLoadingNumber(Request $request)
    {
        $where = array(
            'vehicle_no' => $request->id,
            'status' => 0
        );
        $LoadingEntry=LoadingEntry::where($where)->get();
        $select_LoadingEntry='';
        $select_LoadingEntry.="<option value=''></option>";
        foreach ($LoadingEntry as $row) {
            $count = DB::table('loading_receiveings')->where('loading_entries_id', $row->id)->count();
            if($count==0){
                $select_LoadingEntry.="<option value='$row->id'>$row->loading_no</option>";
            }
            
        }
        return $select_LoadingEntry;
    }


    public function consignor(Request $request){

         $rules=[
            'consignor_name' => 'required|max:255|unique:consignors',
            'place_name' => 'required|max:255',
            'statename'=>'required',
            
        ];

        $messages=[
            'consignor_name.required'=>'Consignor Name is required. Please fill-up.',
            'consignor_name.max'=>'Consignor Name should not be greater then 255.',
            'consignor_name.unique'=>'Consignor Name is Already save.',
            
        
            'place_name.required'=>'Place Name is required.',
            'statename.required'=>'State is required. Please Selected.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);


         if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }


        $consignor=new Consignor(); 
        $consignor->consignor_name= $request->consignor_name;
        $consignor->place_id= $request->place_name;
        $consignor->state_id= $request->statename;
        //  $consignor->ipaddress=$request->getClientIp();
        // $consignor->createdby=auth()->user()->id;
        $consignor->save();
        return $consignor;
    }

    public function getConsignor(){
        $consignors=Consignor::all();
        $select_con='';
        $select_con.="<option>Select Consignor </option>";
        foreach ($consignors as $consignor) {
            $select_con.="<option value='$consignor->id'>$consignor->consignor_name</option>";
        }
        return $select_con;


    }


    public function consignee(Request $request){

         $rules=[
            'consignee_name' => 'required|max:255|unique:consignees',
            'place' => 'required|max:255',
            'state'=>'required',
            
        ];

        $messages=[
            'consignee_name.required'=>'Consignee Name is required. Please fill-up.',
            'consignee_name.max'=>'Consignee Name should not be greater then 255.',
            'consignee_name.unique'=>'Consignee Name already save.',
            
        
            'place.required'=>'Place Name is required.',
            'state.required'=>'State is required. Please Selected.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);


         if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $consignee=new Consignee(); 
        $consignee->consignee_name= $request->consignee_name;
        $consignee->place_id= $request->place;
        $consignee->state_id= $request->state;
        $consignee->save();
        return $consignee;
    }

    public function getConsignee(){
        $consignees=Consignee::all();
        $select_con='';
        $select_con.="<option>Select Consignee </option>";
        foreach ($consignees as $consignee) {
            $select_con.="<option value='$consignee->id'>$consignee->consignee_name</option>";
        }
        return $select_con;


    }


    public function place(Request $request){
        $rules=[
            'place_name' => 'required|max:255|unique:places,placename',
            
        ];

        $messages=[
            'place_name.required'=>'Place Name is required. Please fill-up.',
            'place_name.max'=>'Place Name should not be greater then 255.',
            'place_name.unique'=>'Place Name  is Already save.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $place=new Place(); 
        $place->placename= $request->place_name;
        $place->save();
        return $place;
    }

    public function getPlace(){
        $places=Place::all();
        $select_con='';
        $select_con.="<option value=''>Select Place Name </option>";
        foreach ($places as $place) {
            $select_con.="<option value='$place->id'>$place->placename</option>";
        }
        return $select_con;


    }


    public function petrol(Request $request){
        $rules=[
            'petrol_pump_name' => 'required|max:255',
            'addstatename' => 'required',
            'petrol_type' => 'required',
        ];

        $messages=[
            'petrol_pump_name.required'=>'Petrol Pump Name is required. Please fill-up.',
            'petrol_pump_name.max'=>'Petrol Pump Name should not be greater then 255.',
            'petrol_pump_name.unique'=>'Petrol Pump Name  is Already save.',
            'addstatename.required'=>'State is required. Please fill-up.',
            'petrol_type.required'=>'Type is required. Please fill-up.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

         if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $petrol=new Petrolpump(); 
        $petrol->petrol_pump_name= $request->petrol_pump_name;
        $petrol->state_id= $request->addstatename;
        $petrol->type= $request->petrol_type;
        //  $petrol->ipaddress=$request->getClientIp();
        // $petrol->createdby=auth()->user()->id;
        $petrol->save();
        return $petrol;
    }

    public function getPetrol(){
        $petrols=Petrolpump::all();
        $select_con='';
        $select_con.="<select name='pentrol_pump' id='' class='chosen-select form-control'>
        <option value=''>Select Diesel Name </option>";
        foreach ($petrols as $petrol) {
            $select_con.="<option value='$petrol->id'>$petrol->petrol_pump_name</option>";
        }
        return $select_con;

    }

    public function storeItems(Request $request)
    {
        $item=new Item(); 
        $item->item_category= $request->item_category;
        $item->item_name= $request->item_name;
        $item->unit_messure= $request->unit_messure;
        $item->item_rate= $request->item_rate;
        $item->save();
        return $item;
    }

    public function getItems(Request $request, commonController $c){
        $items = DB::select("SELECT purchase_entries.godown AS godown, purchase_entry_details.item AS item FROM purchase_entries LEFT JOIN purchase_entry_details ON purchase_entries.id = purchase_entry_details.purchase_entry_id WHERE purchase_entries.godown = 1");

        $select_con='';
        $select_con="<option value=''>Select Item </option>";
        foreach ($items as $row) {
            $itemName = $c->getValue('items','item_name','id',$row->item);
            $select_con.="<option value='$row->item'>$itemName</option>";
        }
        return $select_con;
    }

    public function storeHemal(Request $request)
    {   
        $hemal=new hemal(); 
        $hemal->tolly_name= $request->tolly_name;
        $hemal->head_name= $request->head_name;
        $hemal->save();
        return $hemal;
    }

    public function getHemal(){
        $hemals=hemal::all();
        $select_con='';
        $select_con="<option value=''>Select Hemal </option>";
        foreach ($hemals as $hemal) {
            $select_con.="<option value='$hemal->id'>$hemal->tolly_name</option>";
        }
        return $select_con;

    }

}

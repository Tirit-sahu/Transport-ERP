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

class IndexController extends Controller
{
    



    public function index()
    {

        $cates=ItemCategory::all();
        $units=unit::all();
        $trucks=Truck::all();
        $trucknumber=$trucks=LoadingEntry::with('truck')->where('status',1)->get();
        $consignors=Consignor::all();
        $places=Place::all();
        $states=State::all();
        $consignees=Consignee::all();
        $petrolpumps=Petrolpump::all();
        $loads=LoadingEntry::orderBy('id','DESC')->take(5)->get();
        $owners=Truckowner::all();
        $types=Trucktype::all(); 
        // $paymenstloads=LoadingReceiveing::where('status',1)->get();
        // $loadreceives=LoadingEntry::where('status',1)->get();

        // $vehicle_no = isset($_REQUEST['vehicle_no'])?$_REQUEST['vehicle_no']:'';
        // $loading_no = $_REQUEST['loading_no'] ??'';
        // $from_date=$_REQUEST['from_date']??'';
        //  $to_date=$_REQUEST['to_date']??'';


        // if($vehicle_no !='')
        // $loadreceives = $loadreceives->where('vehicle_no',$vehicle_no);

        //  if($loading_no !='')
        // $loadreceives = $loadreceives->where('id',$loading_no);


        // $vehicle_noo=$_REQUEST['vehicle_noo']??'';

        // $ownerr=$_REQUEST['ownerr']??'';

        //  if($vehicle_noo !='')
        // $paymenstloads = $loads->where('vehicle_no',$vehicle_noo);

        // if($ownerr !='')
        //  return $ownerr = Truck::with('truckOwner')->where('truckowner_id',$ownerr)->get();    
                
     return view('admin.loading_entry',compact('trucks','consignors','places','consignees','petrolpumps','loads','owners','types','states','trucknumber', 'cates', 'units'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $loads=LoadingEntry::all();
        return view('admin.index',compact('loads'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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


    public function getTruckDoucmtIndex(Request $request){
        $column=$request->search_truck_docs;
        $truckdocs='';
        $oldDate= \Carbon\Carbon::now()->addDays(15);
        $descredate= \Carbon\Carbon::parse($oldDate)->format('Y-m-d');

        $truckdocs=TruckDocument::select('id','truck_id',$column)
       ->orWhere($column,'<=',$descredate)->get();
       $truckdosc_con='';
        foreach ($truckdocs as $truckdoc) {
                   $trucknumber =Truck::where('id',$truckdoc->truck_id)->first();
                   $maintenance_route = url('/admin/maintain/truckdocs/create?truck_id='.$truckdoc->truck_id);
                    $truckdosc_con.="
                    <tr><td>
                    <span style='color:#F00; font-weight:bold'> ".$trucknumber->truck_number." </span> expiring on <span style='color:#009; font-weight:bold'> ".$truckdoc->$column." </span>
                    &nbsp;&nbsp; <a href='".$maintenance_route."' class='btn btn-warning' style='font-weight:bold'>Renew</a>
                    </td>
                    </tr>";
        }
        return $truckdosc_con;
    }

    public function receiving(Request $request)
    {   
        $LoadingEntry = DB::table('loading_entries')->get();
        // dd($LoadingEntry);
        return view('admin.receiving_entry', ['LoadingEntry'=>$LoadingEntry]);
    }

    public function getLoadingEntryDetails(Request $request)
    {
        $loading_entries = LoadingEntry::where('id', $request->id)->first();        
        $from_place = Place::where('id', $loading_entries->from_place)->value('placename');
        $to_place =   Place::where('id', $loading_entries->to_plce)->value('placename');
        $trucks = Truck::where('id', $loading_entries->vehicle_no)->first();
        $truckowners =  Truckowner::where('id', $trucks->truckowner_id)->value('owner_name');
       
        $data = array(
            'loading_entries'=>$loading_entries,
            'from_place'=>$from_place,
            'to_place'=>$to_place,
            'trucks'=>$trucks,
            'truckowners'=>$truckowners
        );
        return json_encode($data);
    }




}

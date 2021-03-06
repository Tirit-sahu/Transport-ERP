<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;

class TruckServiceController extends Controller
{

    public function invoice_num ($input, $pad_len = 7, $prefix = null) {
        if ($pad_len <= strlen($input))
            trigger_error('<strong>$pad_len</strong> cannot be less than or equal to the length of <strong>$input</strong> to generate invoice number', E_USER_ERROR);
    
        if (is_string($prefix))
            return sprintf("%s%s", $prefix, str_pad($input, $pad_len, "0", STR_PAD_LEFT));
    
        return str_pad($input, $pad_len, "0", STR_PAD_LEFT);
    }

    public function create(Request $request)
    {

        $Y = date('Y');
        $count = DB::table('truck_services')->count();
        $res = $this->invoice_num(++$count, 4);
        $service_number = "S".$Y."/".$res;
        // dd($issue_number);
        return view('admin.truck_service', ['service_number'=>$service_number]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $truck_service_array = [
            'vehicle' => $data['vehicle'],
            'driver' => $data['driver'],
            'serviceDate' => $data['serviceDate'],
            'serviceNumber' => $data['serviceNumber'],
            'meterReading' => $data['meterReading'],
            'narration' => $data['narration']
        ];

        $insertedID = DB::table('truck_services')->insertGetId($truck_service_array);
        
        $count = sizeof($data['serviceType']);
        for ($i=0; $i < $count; $i++) { 

            $truck_service_details_array = [
                'serviceType' => $data['serviceType'][$i],
                'expiryDate' => $data['expiryDate'][$i],
                'AMT' => $data['AMT'][$i],
                'remark' => $data['remark'][$i],
                'truckServiceId' => $insertedID
            ];

            DB::table('truck_service_details')->insert($truck_service_details_array);

        }
        
        $request->session()->flash('message', 'New Record Added Successfully');
        return Redirect::back();
    }



    public function show(Request $request)
    {
        $truck_services = DB::table('truck_services')->orderBy('id', 'DESC')->get();
        return view('admin.report_truck_services', ['truck_services'=>$truck_services]);
    }

    public function truckServiceDetails($id, Request $request)
    {
        $truck_services = DB::table('truck_services')->where('id', $id)->first();
        $truck_service_details = DB::table('truck_service_details')->where('truckServiceId', $id)->get();
        // dd($item_issue_details);
        return view('admin.report_truck_service_details', ['truck_services'=>$truck_services, 'truck_service_details'=>$truck_service_details]);
    }


    public function edit($id)
    {
        $truck_service = DB::table('truck_services')->where('id', $id)->first();
        $truck_service_details = DB::table('truck_service_details')->where('truckServiceId', $id)->get();
        // dd($truck_service_details);
        return view('admin.truck_service', ['truck_service'=>$truck_service, 'truck_service_details'=>$truck_service_details]);
    }

    public function getEditTruckServiceDetails(Request $request)
    {
        $truck_service_details = DB::table('truck_service_details')->where('truckServiceId', $request->id)->get();
        // dd($truck_service_details[0]);
        return json_encode($truck_service_details);
    }


    public function truckServiceUpdate($id, Request $request)
    {
        $data = $request->all();
        $truck_service_array = [
            'vehicle' => $data['vehicle'],
            'driver' => $data['driver'],
            'serviceDate' => $data['serviceDate'],
            'serviceNumber' => $data['serviceNumber'],
            'meterReading' => $data['meterReading'],
            'narration' => $data['narration']
        ];

        $insertedID = DB::table('truck_services')->insertGetId($truck_service_array);
        
        $count = sizeof($data['serviceType']);
        for ($i=0; $i < $count; $i++) { 

            $truck_service_details_array = [
                'serviceType' => $data['serviceType'][$i],
                'expiryDate' => $data['expiryDate'][$i],
                'AMT' => $data['AMT'][$i],
                'remark' => $data['remark'][$i],
                'truckServiceId' => $insertedID
            ];

            DB::table('truck_service_details')->insert($truck_service_details_array);

        }
        DB::table('truck_services')->where('id', $id)->delete();
        DB::table('truck_service_details')->where('truckServiceId', $id)->delete();

        $request->session()->flash('message', 'Record Updated Successfully');
        return Redirect('/truckServiceShow');
    }

    


    

}

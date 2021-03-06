<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Redirect;
use Session;


class BatteryOpeningBalanceController extends Controller
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
        return view('admin.battery.battery-opening-balance-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image1 = '';
        $image2 = '';

        if($request->hasFile('Mimage1')){
            $image = $request->file('Mimage1');
                $image_name = date('Ymdhisu').'1.'.$image->extension();
                $image->storeAs('BatteryImages', $image_name, 'public');
                $image1 = $image_name;
        }

        if($request->hasFile('Mimage2')){
            $image = $request->file('Mimage2');
                $image_name = date('Ymdhisu').'2.'.$image->extension();
                $image->storeAs('BatteryImages', $image_name, 'public');
                $image2 = $image_name;
        }

        $myArray = array(
            'truck_number' => $request->Mtruck_number,
            'batteryName' => $request->Mbattery_name,
            'batterySerialNo' => $request->Mserial_number,
            'batteryImage1' => $image1,
            'batteryImage2' => $image2,
            'upload_date' => date('Y-m-d', strtotime($request->Mupload_date))           
        );


        if (DB::table('battery_opening_balances')->insert($myArray)) {
            return 1;
        }else{
            return 0;
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, commonController $c)
    {
        $truck_number = $request->truck_number;
        $batteryName = $request->batteryName;

        $battery_opening_balances = DB::table('battery_opening_balances')
        ->where(['truck_number'=>$truck_number, 'batteryName'=>$batteryName])
        ->get();

        $table_body = '';
        foreach($battery_opening_balances as $row){
            $trckNumber = $c->getValue('trucks','truck_number','id',$row->truck_number);
            $image1url = asset("storage/app/public/BatteryImages/".$row->batteryImage1);
            $image2url = asset("storage/app/public/BatteryImages/".$row->batteryImage2);
            $table_body .= '            
            <tr>
                <td>'.$trckNumber.'</td>
                <td>'.$row->batteryName.'</td>
                <td>'.$row->batterySerialNo.'</td>
                <td>'.date('d-m-Y', strtotime($row->upload_date)).'</td>
                <td>
                    <a href="'.$image1url.'" target="_blank">
                    <img style="width: 60px;height:60px;" src="'.$image1url.'" alt="Image not found">
                    </a>
                </td>
                <td>
                    <a href="'.$image2url.'" target="_blank">
                    <img style="width: 60px;height:60px;" src="'.$image2url.'" alt="Image not found">
                    </a>
                </td>
                <td>
                    <a title="Delete" class="label label-danger" onclick="deleteBatteryOpening('.$row->id.')"><i class="fa fa-minus-circle" aria-hidden="true"></i> Delete</a>
                </td>
            </tr>
            ';
        }

        $table = '
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Truck No.</th>
                <th>Battery Name</th>
                <th>Serial No.</th>                
                <th>Image 1</th>
                <th>Image 2</th>
                <th>Upload Date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>     
                '.$table_body.'
            </tbody>
        </table>
        ';
        return $table;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $battery_opening_balances = DB::table('battery_opening_balances')
        ->where('id', $id)
        ->first();
        return view('admin.battery.battery-opening-balance-create', ['battery_opening_balances'=>$battery_opening_balances]);
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
        unset($data['battery1Images']);
        unset($data['battery2Images']);
        unset($data['_token']);

        
        $i=0;
        if($request->hasFile('battery1Images')){
            $battery1ImagesArray = [];
            $image = $request->file('battery1Images');
            foreach($image as $file) {
                $battery1Images = date('Ymdhisu').++$i.'.'.$file->extension();
                $file->storeAs('BatteryImages', $battery1Images, 'public');
                array_push($battery1ImagesArray,$battery1Images);
            }
            $data['battery1Images'] = json_encode($battery1ImagesArray);
        }

        $i=10;
        if($request->hasFile('battery2Images')){
            $battery2ImagesArray = [];
            $image = $request->file('battery2Images');
            foreach($image as $file) {
                $battery2Images = date('Ymdhisu').++$i.'.'.$file->extension();
                $file->storeAs('BatteryImages', $battery2Images, 'public');
                array_push($battery2ImagesArray,$battery2Images);
            }
            $data['battery2Images'] = json_encode($battery2ImagesArray);
        }


        DB::table('battery_opening_balances')->where('id', $id)->update($data);
        $request->session()->flash('message', 'Record Updated Successfully');
        return Redirect('battery-opening-balance-datatables');
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

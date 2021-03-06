<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Redirect;
use Session;


class TyreOpeningBalance extends Controller
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
        return view('admin.tyre_mapping.tyre-opening-record');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data['truck_number'] = $request->Mtruck_number;
        $data['tyre_type'] = $request->Mtyre_type;
        $data['serial_number'] = $request->Mserial_number;
        $data['name'] = $request->Mname;
        $data['meter_reading'] = $request->Mmeter_reading;
        $data['upload_date'] = date('Y-m-d', strtotime($request->Mupload_date));

        if($request->hasFile('Mimage1')){
            $Mimage1 = $request->file('Mimage1');
                $filename = date('Ymdhisu').'1.'.$Mimage1->extension();
                $Mimage1->storeAs('TyreImages', $filename, 'public');
            $data['image1'] = $filename;
        }

        if($request->hasFile('Mimage2')){
            $Mimage2 = $request->file('Mimage2');
                $filename = date('Ymdhisu').'2.'.$Mimage1->extension();
                $Mimage2->storeAs('TyreImages', $filename, 'public');
            $data['image2'] = $filename;
        }

        DB::table('tyre_opening_balances')->insert($data);
        return 1;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $truck_number = $request->truck_id;
        $tyre_type = $request->tyre_type;

        $tyre_opening_balances = DB::table('tyre_opening_balances')
        ->where(['truck_number'=>$truck_number, 'tyre_type'=>$tyre_type])
        ->get();

        $table_body = '';
        foreach($tyre_opening_balances as $row){
            $image1url = asset("storage/app/public/TyreImages/".$row->image1);
            $image2url = asset("storage/app/public/TyreImages/".$row->image2);
            $table_body .= '            
            <tr>
                <td>'.$row->truck_number.'</td>
                <td>'.$row->tyre_type.'</td>
                <td>'.$row->serial_number.'</td>
                <td>'.$row->name.'</td>
                <td>'.$row->meter_reading.'</td>
                <td>'.$row->upload_date.'</td>
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
                    <a title="Delete" class="label label-danger" onclick="deleteTyreOpening('.$row->id.')"><i class="fa fa-minus-circle" aria-hidden="true"></i> Delete</a>
                </td>
            </tr>
            ';
        }

        $table = '
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Truck No.</th>
                <th>Tyre Type</th>
                <th>Serial No.</th>
                <th>Tyre Name</th>
                <th>Meter Reading</th>
                <th>Upload Date</th>
                <th>Image 1</th>
                <th>Image 2</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>     
                '.$table_body.'
            </tbody>
        </table>
        ';
        return $table;
        // return view('admin.tyre_mapping.tyre-opening-record-datatables', ['tyre_opening_balances'=>$tyre_opening_balances]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tyre_opening_balances = DB::table('tyre_opening_balances')->where('id', $id)->first();
        return view('admin.tyre_mapping.tyre-opening-record', ['tyre_opening_balances'=>$tyre_opening_balances]);
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
        unset($data['images']);
        unset($data['_token']);
        $data['upload_date'] = date('Y-m-d', strtotime($request->upload_date));

        
        $i=0;
        if($request->hasFile('images')){
            $imagesArray = [];
            $image = $request->file('images');
            foreach($image as $file) {
                $filename = date('Ymdhisu').++$i.'.'.$file->extension();
                $file->storeAs('TyreImages', $filename, 'public');
                array_push($imagesArray,$filename);
            }
            $data['images'] = json_encode($imagesArray);
        }

        DB::table('tyre_opening_balances')->where('id', $id)->update($data);
        $request->session()->flash('message', 'Record Updated Successfully');
        return Redirect('tyre-opening-record-datatables');
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

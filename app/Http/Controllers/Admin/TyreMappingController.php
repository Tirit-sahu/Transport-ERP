<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Redirect;
use Session;
use Http;

class TyreMappingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getTyreType(Request $request)
    {
        $tructype_id = DB::table('trucks')->where('id', $request->truckId)->value('tructype_id');   
        return $trucktypes = DB::table('trucktypes')->where('id', $tructype_id)->value('trucktype');
    }

    public function getTyreTypeName(Request $request)
    {
        $tructype_id = DB::table('trucks')->where('id', $request->truckId)->value('tructype_id');   
        $trucktypes = DB::table('trucktypes')->where('id', $tructype_id)->value('trucktype');

        $tyre_type = DB::table('tyre_type')->where('truck_tyre', $trucktypes)->get();
        $html = '';
        foreach($tyre_type as $row){
            $html .= '<option value="'.$row->id.'">'.$row->tyre_type.'</option>';
        }
        return $html;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tyre_mapping.tyre-mapping-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();
        unset($data['images']);
        unset($data['_token']);
        $data['upload_date'] = date('Y-m-d', strtotime($request->upload_date));

        $imagesArray = [];
        $i=0;
        if($request->hasFile('images')){
            $image = $request->file('images');
            foreach($image as $file) {
                $filename = date('Ymdhis').++$i.'.'.$file->extension();
                $file->storeAs('TyreImages', $filename, 'public');
                array_push($imagesArray,$filename);
            }
            $data['images'] = json_encode($imagesArray);
        }

        $Serial_number = $request->Serial_number;
        $request->session()->put('tyre_mappings', $data);
        
        $digits = 6;
        $xopt = rand(pow(10, $digits-1), pow(10, $digits)-1);
        $msg = urlencode('Otp For Tyre Mapping is '.$xopt.' Valid For 2 Mins.');
        Session::put('xotp', $xopt);
        $response = Http::get('http://msg.msgclub.net/rest/services/sendSMS/sendGroupSms?AUTH_KEY=49b5e427b790ba521a9e921ed9a2d43&message='.$msg.'&senderId=CHARUI&routeId=1&mobileNos=6260690097&smsContentType=english');

        return Redirect('otp-for-tyre-mapping');
        // DB::table('tyre_mappings')->insert($data);
        // DB::table('hsn_and_serialnumbers')->where('id', $Serial_number)->update(['status'=>1]);
        // $request->session()->flash('message', 'New Record Added Successfully');
        // return Redirect::back();
        }


        public function OTPForTyreMapping(Request $request)
        {
            return view('admin.tyre_mapping.tyre-mapping-otp');
        }

        public function tyreMappingOtpValidate(Request $request)
        {
            $notp = $request->notp;
            $xotp = Session::get('xotp');
            if ($notp == $xotp){
                $tyre_mappings = Session::get('tyre_mappings');
                $Serial_number = $tyre_mappings['Serial_number'];
                DB::table('tyre_mappings')->insert($tyre_mappings);
                DB::table('hsn_and_serialnumbers')->where('id', $Serial_number)->update(['status'=>1]);
                $request->session()->flash('message', 'New Record Added Successfully');
                return Redirect('tyre-mapping-create');
            }else{
                $request->session()->flash('error', 'Invalid otp');
                return Redirect::back();
            }
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $tyre_mappings = DB::table('tyre_mappings')->orderBy('id', 'DESC')->get();
        return view('admin.tyre_mapping.tyre-mapping-datatables', ['tyre_mappings'=>$tyre_mappings]);
    }


    public function getSerialNumber(commonController $c)
    {
        $hsn_and_serialnumbers = DB::table('hsn_and_serialnumbers')
        ->where('status', 0)
        ->get();
        $html = '';
        foreach($hsn_and_serialnumbers as $row){
            $item = $c->getValue('items','item_name','id',$row->item);
            $html .= '
            <option value="'.$row->id.'">'.$row->serial_number.'/'.$item.'</option>
            ';
        }
        return $html;

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

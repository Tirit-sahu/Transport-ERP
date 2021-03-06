<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Truck;
use App\Admin\TruckDocument;
use PDF;


class TruckDocumentController extends Controller
{

    public function makePDF(Request $request)
    {
        $data = ['title'=>$request->title, 'val' => $request->val];
        $pdf = PDF::loadView('admin.maintain.truckdocs.pdf', $data);        
        return $pdf->download($request->title.'.pdf');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docs=TruckDocument::all();
        return view('admin.maintain.truckdocs.view',compact('docs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trucks=Truck::all();
        return view('admin.maintain.truckdocs.create',compact('trucks'));
    }

    public function getTruckDetails(Request $request){
        $truckdetails=Truck::with('truckowner')->where('id',$request->truck_number)->First();       
        $truckdetails->docs=TruckDocument::where('truck_id',$truckdetails->id)->first();
        return json_encode($truckdetails);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        if($request->truck_docs_id){
            $docs=TruckDocument::find($request->truck_docs_id);
        }else{
            $docs= new TruckDocument();
        }

        $docs->truck_id=$request->trucknumber_id;
        $docs->permit_issue_date=$request->permit_issue_date;
        $docs->permit_expiry_date=$request->permit_expiry_date;
        $docs->fitness_issue_date=$request->fitness_issue_date;
        $docs->fitness_expiry_date=$request->fitness_expiry_date;
        $docs->ins_issue_date=$request->ins_issue_date;
        $docs->ins_expiry_date=$request->ins_expiry_date;
        $docs->road_issue_date=$request->road_issue_date;
        $docs->road_expiry_date=$request->road_expiry_date;
        $docs->poll_issue_date=$request->poll_issue_date;


        $docs->poll_expiry_date=$request->poll_expiry_date;
        $docs->noti_issue_date=$request->noti_issue_date;
        $docs->noti_expiry_date=$request->noti_expiry_date;
        $docs->khanij_issue_date=$request->khanij_issue_date;
        $docs->khanij_expiry_date=$request->khanij_expiry_date;
        // $docs->ipaddress=$request->getClientIp();
        $docs->createdby=auth()->user()->id;
        $permit_file = [];
        $i=0;
        if($request->hasFile('permit_file')){
            $image = $request->file('permit_file');            
            foreach($image as $file) {
                $filename = date('Ymdhis').++$i.'.'.$file->extension();
                $file->storeAs('TruckDocs', $filename, 'public');
                array_push($permit_file,$filename);
            }
            // dd($permit_file);
            $docs->permit_file= json_encode($permit_file);
        }

        $fitness_file = [];
        if($request->hasFile('fitness_file')){
            $image = $request->file('fitness_file');
            foreach($image as $file) {
                $filename = date('Ymdhis').++$i.'.'.$file->extension();
                $file->storeAs('TruckDocs', $filename, 'public');
                array_push($fitness_file,$filename);
            }
            // dd($fitness_file);
            $docs->fitness_file= json_encode($fitness_file);
        }


        $ins_file = [];
        if($request->hasFile('ins_file')){
            $image = $request->file('ins_file');
            foreach($image as $file) {
                $filename = date('Ymdhis').++$i.'.'.$file->extension();
                $file->storeAs('TruckDocs', $filename, 'public');
                array_push($ins_file,$filename);
            }
            // dd($ins_file);
            $docs->ins_file= json_encode($ins_file);
        }


        $road_file = [];
        if($request->hasFile('road_file')){
            $image = $request->file('road_file');
            foreach($image as $file) {
                $filename = date('Ymdhis').++$i.'.'.$file->extension();
                $file->storeAs('TruckDocs', $filename, 'public');
                array_push($road_file,$filename);
            }
            // dd($road_file);
            $docs->road_file= json_encode($road_file);
        }

        $poll_file = [];
        if($request->hasFile('poll_file')){
            $image = $request->file('poll_file');
            foreach($image as $file) {
                $filename = date('Ymdhis').++$i.'.'.$file->extension();
                $file->storeAs('TruckDocs', $filename, 'public');
                array_push($poll_file,$filename);
            }
            // dd($poll_file);
            $docs->poll_file= json_encode($poll_file);
        }

        $nati_file = [];
        if($request->hasFile('nati_file')){
            $image = $request->file('nati_file');
            foreach($image as $file) {
                $filename = date('Ymdhis').++$i.'.'.$file->extension();
                $file->storeAs('TruckDocs', $filename, 'public');
                array_push($nati_file,$filename);
            }
            // dd($nati_file);
            $docs->nati_file= json_encode($nati_file);
        }

        $khanij_file = [];
        if($request->hasFile('khanij_file')){
            $image = $request->file('khanij_file');
            foreach($image as $file) {
                $filename = date('Ymdhis').++$i.'.'.$file->extension();
                $file->storeAs('TruckDocs', $filename, 'public');
                array_push($khanij_file,$filename);
            }
            // dd($khanij_file);
            $docs->khanij_file= json_encode($khanij_file);
        }


        $docus=$docs->save();

        return redirect()->back()->with('message','Truck Document Added');
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
}

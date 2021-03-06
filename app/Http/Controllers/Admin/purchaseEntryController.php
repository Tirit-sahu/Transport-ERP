<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use Session;
use DB;
use PDF;


class purchaseEntryController extends Controller
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
        return view('admin.purchase.purchase-entry-create');
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
        // dd($data);
        $myArray1 = array(
            'supplier_name' => $request->supplier_name,
            'bill_number' => $request->bill_number,
            'date' => date('Y-m-d', strtotime($request->date)),
            'receiving_proof' => $request->receiving_proof,
            'discount' => $request->discount,
            'purchase_type' => $request->purchase_type,
            'godown' => $request->godown
        );
        
        $purchase_entry_id = DB::table('purchase_entries')
        ->insertGetId($myArray1);

        $counter = sizeof($request->item);

        for ($i=0; $i < $counter; $i++) { 
            $myArray2 = array(
                'purchase_entry_id' => $purchase_entry_id,
                'item' => $request->item[$i],
                'unit' => $request->unit[$i],
                'rate' => $request->rate[$i],
                'qty' => $request->qty[$i],
                'gst' => $request->gst[$i],
                'gst_type' => $request->gst_type[$i],
                'total_without_tax' => $request->total_without_tax[$i],
                'total_amount' => $request->total_amount[$i]
            );

           $purchase_entry_detail_id = DB::table('purchase_entry_details')
            ->insertGetId($myArray2);

            $itemId = $request->item[$i];
            DB::table('hsn_and_serialnumbers')
            ->where(['purchase_entry_detail_id'=>0, 'item'=>$itemId])
            ->update(['purchase_entry_detail_id'=>$purchase_entry_detail_id]);

        }
        
        $request->session()->flash('message', 'New Record Added Successfully');
        return Redirect::back();
    }


    public function serialNumberStore(Request $request)
    {
        $data = $request->data;
        $array = json_decode($data);
        $counter = sizeof($array);
        // return $array[1]->serial_number;
        for ($i=0; $i < $counter; $i++) { 
            $myArray = array(
                'purchase_entry_detail_id'=>0,
                'item'=>$array[$i]->item,
                'serial_number'=>$array[$i]->serial_number
            );
            DB::table('hsn_and_serialnumbers')->insert($myArray);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function purchaseEntryReport()
    {
        $purchase_entries = DB::table('purchase_entries')
        ->orderBy('id', 'DESC')
        ->get();
        return view('admin.purchase.purchase-entry-datatable', ['purchase_entries'=>$purchase_entries]);
    }

   
    public function purchaseItemDetails($id)
    {
        $purchase_entry_details = DB::table('purchase_entry_details')
        ->where('purchase_entry_id', $id)
        ->get();
        return view('admin.purchase.purchase-item-details', ['purchase_entry_details'=>$purchase_entry_details]);
    }


    public function getItemSerialNumber(Request $request)
    {
        $hsn_and_serialnumbers = DB::table('hsn_and_serialnumbers')->where('purchase_entry_detail_id', $request->id)->get();
        $tbody='';
        $i=1;
        foreach($hsn_and_serialnumbers as $row){
            $tbody .='<tr>
                <td>'.$i.'</td>
                <td>'.$row->serial_number.'</td>
            </tr>';
            ++$i;
        }

        $html = '<table class="table">
            <tr>
                <th>SNO</th>
                <th>Serial Number</th>
            </tr>
                '.$tbody.'
        </table>';
        return $html;
    }

    public function purchaseEntryPdf($id)
    {
        $purchase_entries = DB::table('purchase_entries')
        ->where('id', $id)
        ->first();

        $purchase_entry_details = DB::table('purchase_entry_details')
        ->where('purchase_entry_id', $id)
        ->get();
        
        // view()->share();
        $pdf=PDF::loadView('admin.purchase.purchase-invoice')->setPaper('A4');
        return $pdf->stream();
    }
   
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

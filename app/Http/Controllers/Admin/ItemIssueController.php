<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;


class ItemIssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function invoice_num ($input, $pad_len = 7, $prefix = null) {
        if ($pad_len <= strlen($input))
            trigger_error('<strong>$pad_len</strong> cannot be less than or equal to the length of <strong>$input</strong> to generate invoice number', E_USER_ERROR);
    
        if (is_string($prefix))
            return sprintf("%s%s", $prefix, str_pad($input, $pad_len, "0", STR_PAD_LEFT));
    
        return str_pad($input, $pad_len, "0", STR_PAD_LEFT);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Y = date('Y');
        $count = DB::table('item_issues')->count();
        $res = $this->invoice_num(++$count, 4);
        $issue_number = "I".$Y."/".$res;
        // dd($issue_number);
        return view('admin.item_issue', ['issue_number'=>$issue_number]);
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
            'vehicle'=>'required',
            'driver'=>'required',
            'issueDate'=>'required'
        ]);

        $data = $request->all();
        $ItemIssue = [
            'vehicle' => $data['vehicle'],
            'driver' => $data['driver'],
            'issueDate' => $data['issueDate'],
            'issueNumber' => $data['issueNumber'],
            'meterReading' => $data['meterReading'],
            'narration' => $data['narration']
        ];

        $itemIssueID = DB::table('item_issues')->insertGetId($ItemIssue);
        
        $count = sizeof($data['item']);
        for ($i=0; $i < $count; $i++) { 

            $ItemIssueDetails = [
                'godown' => $data['godown'][$i],
                'item' => $data['item'][$i],
                'unit' => $data['unit'][$i],
                'HSN' => $data['HSN'][$i],
                'exchangeReceipt' => $data['exchangeReceipt'][$i],
                'itemType' => $data['itemType'][$i],
                'QTY' => $data['QTY'][$i],
                'itemIssueID' => $itemIssueID
            ];

            DB::table('item_issue_details')->insert($ItemIssueDetails);

        }
        
        $request->session()->flash('message', 'New Record Added Successfully');
        return Redirect::back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show(Request $request)
    {
        $item_issues = DB::table('item_issues')->orderBy('id', 'DESC')->get();
        return view('admin.report_item_issue', ['item_issues'=>$item_issues]);
    }

    public function showItemIssueDetails($id, Request $request)
    {
        $item_issues = DB::table('item_issues')->where('id', $id)->first();
        $item_issue_details = DB::table('item_issue_details')->where('itemIssueID', $id)->get();
        // dd($item_issue_details);
        return view('admin.report_item_issue_details', ['item_issues'=>$item_issues, 'item_issue_details'=>$item_issue_details]);
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item_issues = DB::table('item_issues')->where('id', $id)->first();
        $item_issue_details = DB::table('item_issue_details')->where('itemIssueID', $id)->get();
        // dd($item_issue_details[0]->item);
        return view('admin.item_issue', ['item_issues'=>$item_issues, 'item_issue_details'=>$item_issue_details]);
    }

    public function getEditItemIssueDetails(Request $request)
    {
        $item_issue_details = DB::table('item_issue_details')->where('itemIssueID', $request->id)->get();
        // dd($item_issue_details[0]->item);
        return json_encode($item_issue_details);
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
        $ItemIssue = [
            'vehicle' => $data['vehicle'],
            'driver' => $data['driver'],
            'issueDate' => $data['issueDate'],
            'issueNumber' => $data['issueNumber'],
            'meterReading' => $data['meterReading'],
            'narration' => $data['narration']
        ];

        $itemIssueID = DB::table('item_issues')->insertGetId($ItemIssue);
        
        $count = sizeof($data['item']);
        for ($i=0; $i < $count; $i++) { 

            $ItemIssueDetails = [
                'godown' => $data['godown'][$i],
                'item' => $data['item'][$i],
                'unit' => $data['unit'][$i],
                'HSN' => $data['HSN'][$i],
                'exchangeReceipt' => $data['exchangeReceipt'][$i],
                'itemType' => $data['itemType'][$i],
                'QTY' => $data['QTY'][$i],
                'itemIssueID' => $itemIssueID
            ];

            DB::table('item_issue_details')->insert($ItemIssueDetails);

        }
        
        DB::table('item_issues')->where('id', $id)->delete();
        DB::table('item_issue_details')->where('itemIssueID', $id)->delete();
        
        $request->session()->flash('message', 'Record Updated Successfully');
        return Redirect('/itemIssueReport');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        DB::table('item_issues')->where('id', $id)->delete();
        $request->session()->flash('message', 'Deleted Successfully');
        return redirect()->back();
    }

    public function itemIssueDetailsDelete($id, Request $request)
    {
        DB::table('item_issue_details')->where('id', $id)->delete();
        $request->session()->flash('message', 'Deleted Successfully');
        return redirect()->back();
    }


    public function getGodownForItemIssue(Request $request, commonController $c)
    {
        $godowns = DB::select("SELECT godown FROM `purchase_entries` GROUP BY godown");        
        $html = '<option value="">Select An Oprion</option>';
        foreach($godowns as $row){
            $godownName = $c->getValue('godowns','name','id',$row->godown);
            $html .='<option value="'.$row->godown.'">'.$godownName.'</option>';
        }
        return $html;
    }


    public function getUnitForItemIssue(Request $request, commonController $c)
    {
        $godown = $request->godown;
        $item = $request->item;
        
        $unitId = DB::table('items')->where('id', $item)->value('unit_messure');
        $unitName = $c->getValue('units','name','id',$unitId);
        $html ='<option value="'.$unitId.'">'.$unitName.'</option>';

        $itemStockIn = DB::select("SELECT SUM(purchase_entry_details.qty) AS inQty FROM purchase_entries LEFT JOIN purchase_entry_details ON purchase_entries.id = purchase_entry_details.purchase_entry_id WHERE purchase_entries.godown = $godown AND purchase_entry_details.item = $item");
        $totalStockIn = isset($itemStockIn[0]->inQty)?$itemStockIn[0]->inQty:0;

        $itemStockOut = DB::select("SELECT SUM(QTY) AS outQty FROM item_issue_details WHERE godown = $godown AND item = $item");
        $totalStockOut = isset($itemStockOut[0]->outQty)?$itemStockOut[0]->outQty:0;
        $totalStockBalance = $totalStockIn - $totalStockOut;
        return [$html, $totalStockBalance];
    }

    
}

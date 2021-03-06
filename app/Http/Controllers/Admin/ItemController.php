<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Admin\Item;
use App\Admin\ItemCategory;
use App\Admin\unit;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Item::all();
        return view('admin.goods.item.view',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cates=ItemCategory::all();
        $units=unit::all();
        return view('admin.goods.item.create',compact('cates', 'units'));
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
            'item_category'=>'required',
            'item_name'=>'required',
            'unit_messure'=>'required',
            'item_rate'=>'required'
        ]);

        $item=new Item();
        $item->item_category=$request->item_category;
        $item->item_name=$request->item_name;
        $item->description=$request->description;
        $item->unit_messure=$request->unit_messure;
        $item->item_rate=$request->item_rate;
        $item->hsncode=$request->hsncode;
        // $item->createdby=auth()->user()->id;
        // $item->ipaddress=$request->getClientIp();
        $item->save();

        return redirect()->back()->with('message','Item Add Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $item=Item::find($id);
         $cates=ItemCategory::all();
         $units=unit::all();
         return view('admin.goods.item.edit',compact('item','cates','units'));
         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
         $item=Item::find($id);
        $item->item_category=$request->item_category;
        $item->item_name=$request->item_name;
        $item->description=$request->description;
        $item->unit_messure=$request->unit_messure;
        $item->item_rate=$request->item_rate;
        $item->hsncode=$request->hsncode;
        // $item->ipaddress=$request->getClientIp();
        // $item->createdby=auth()->user()->id;
        
        $item->save();

        return redirect(route('item.index'))->with('message','Item Update Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $item=Item::find($id)->delete();
          return redirect(route('item.index'))->with('message','Item Delete Successfully.');
    }
}

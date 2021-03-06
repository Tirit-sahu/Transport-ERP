<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\ItemCategory;
class ItemCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cates=ItemCategory::all();
        return view('admin.goods.cate.view',compact('cates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.goods.cate.create');
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
            'item_category_name' => ['required', 'string', 'max:255','unique:item_categories']
        ]);

         $cate=new ItemCategory();
         $cate->item_category_name=$request->item_category_name;
         $cate->save();
         return redirect()->back()->with('message','Add Item Category Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\ItemCategory  $itemCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ItemCategory $itemCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\ItemCategory  $itemCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cate=ItemCategory::find($id);
        return view('admin.goods.cate.edit',compact('cate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\ItemCategory  $itemCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
    
        $request->validate([
            'item_category_name' => ['required', 'string', 'max:255','unique:item_categories,item_category_name,'.$id]
        ]);

         $cate=ItemCategory::find($id);
         $cate->item_category_name=$request->item_category_name;
         $cate->save();
         return redirect(route('cate.index'))->with('message','Update Item Category Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\ItemCategory  $itemCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ItemCategory::find($id)->delete();
        return redirect(route('cate.index'))->with('message','Delete Item Category Successfully');
    }
}

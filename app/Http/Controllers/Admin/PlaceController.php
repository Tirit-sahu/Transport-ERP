<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Place;
use Illuminate\Support\Facades\Validator;
use DB;
class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $places=Place::where('status',1)->orderBy('id','DESC')->get();
        // return view('admin.place.place.view',compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.place.place.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $rules=[
            'placename' => 'required|max:255|unique:places',
            
        ];

        $messages=[
            'placename.required'=>'Place Name is required. Please fill-up.',
            'placename.max'=>'Place Name should not be greater then 255.',
            'placename.unique'=>'Place Name  is Already save.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

         if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $place=new Place();
        $place->placename=$request->placename;
        $place->city_code=$request->city_code;
        $place->save();
        return back()->with('message','Place Add Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $places=DB::table('places')->get();
        // dd($place);
        return view('admin.place.place.view',compact('places'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $place=Place::find($id);
        return view('admin.place.place.edit',compact('place'));
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


                $rules=[
            'placename' => 'required|max:255|unique:places,placename,'.$id,
            
        ];

        $messages=[
            'placename.required'=>'Place Name is required. Please fill-up.',
            'placename.max'=>'Place Name should not be greater then 255.',
            'placename.unique'=>'Place Name  is Already save.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

         if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

       $place=Place::find($id);
        $place->placename=$request->placename;
        $place->city_code=$request->city_code;        
        $place->save();
        return redirect('/admin/place/place/show')->with('message','Place Update Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Place::find($id)->delete();
        return back()->with('message','Place Delete Successfully.');
    }
}

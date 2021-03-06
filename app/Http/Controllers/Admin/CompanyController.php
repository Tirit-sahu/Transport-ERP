<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Admin\Company;
use App\Admin\State;
use Storage;
use Illuminate\Support\Facades\Validator;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $companies=Company::where('status', 1)->orderBy('id', 'DESC')->get();
        return view('admin.company.company.view',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states=State::all();
        return view('admin.company.company.create',compact('states'));
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
            'company_owner_name' => 'required|unique:companies|max:255',
            'company_name' => 'required|unique:companies|max:255',
                'state_id'=>'required',
            
        ];

        $messages=[
            'company_owner_name.required'=>'Company Owner Name is required. Please fill-up.',
            'company_owner_name.max'=>'Company Owner Name should not be greater then 255.',
            'company_owner_name.unique'=>'Company Owner Name is already add.',
            
        
            'company_name.required'=>'Company Name is required.',
            'company_name.max'=>'Company Name should not be greater then 255.',
            'company_name.max'=>'Company Name is already add.',
        
            'state_id.required'=>'State is required. Please Selected.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);


         if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }




         $company=new Company();
        if($request->hasFile('company_logo')){
            $fileName=$request->company_logo->getClientOriginalName();
             $request->company_logo->storeAs('companyimg',$fileName,'public');
           $company->company_logo=$fileName;
        }
       
       
        $company->company_owner_name=$request->company_owner_name;
        $company->company_head_name=$request->company_head_name;
        $company->company_name=$request->company_name;
        $company->company_phone=$request->company_phone;
        $company->company_mobile=$request->company_mobile;
        $company->company_mobile2=$request->company_mobile2;
        $company->head_office_address=$request->head_office_address;
        $company->company_address=$request->company_address;
        $company->company_pan_card=$request->company_pan_card;
        $company->company_gst_no=$request->company_gst_no;
        $company->state_id=$request->state_id;
        $company->company_Loading_prefix=$request->company_Loading_prefix;
        $company->ipaddress=$request->getClientIp();
        $company->createdby=auth()->user()->id;
        $company->save();
        
        return back()->with('message','Company Create Successfully');
      

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
        $states=State::all();
        $company=Company::find($id);
        return view('admin.company.company.edit',compact('company','states'));

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
            'company_owner_name' => 'required|max:255|unique:companies,company_owner_name,'.$id,
            'company_name' => 'required|unique:companies|max:255',
                'state_id'=>'required',
            
        ];

        $messages=[
            'company_owner_name.required'=>'Company Owner Name is required. Please fill-up.',
            'company_owner_name.max'=>'Company Owner Name should not be greater then 255.',
            'company_owner_name.unique'=>'Company Owner Name is already add.',
            
        
            'company_name.required'=>'Company Name is required.',
            'company_name.max'=>'Company Name should not be greater then 255.',
            'company_name.max'=>'Company Name is already add.',
        
            'state_id.required'=>'State is required. Please Selected.',
        ];


        $company=Company::find($id);
            if($request->hasFile('company_logo')){
            $fileName=$request->company_logo->getClientOriginalName();
            Storage::delete('public/companyimg/'.$company->company_logo);
             $request->company_logo->storeAs('companyimg',$fileName,'public');
            $company->company_logo=$fileName;  
        }
        
        
        $company->company_owner_name=$request->company_owner_name;
        $company->company_head_name=$request->company_head_name;
        $company->company_name=$request->company_name;
        $company->company_phone=$request->company_phone;
        $company->company_mobile=$request->company_mobile;
        $company->company_mobile2=$request->company_mobile2;
        $company->head_office_address=$request->head_office_address;
        $company->company_address=$request->company_address;
        $company->company_pan_card=$request->company_pan_card;
        $company->company_gst_no=$request->company_gst_no;
        $company->state_id=$request->state_id;
        $company->company_Loading_prefix=$request->company_Loading_prefix;
        $company->ipaddress=$request->getClientIp();
        $company->createdby=auth()->user()->id;

        $company->save();
        return redirect(route('company.index'))->with('message','Company Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company=Company::find($id);
         Storage::delete('public/companyimg/'.$company->company_logo);
         $company->delete();
         return back()->with('message','Delete Successfully.');
    }
}

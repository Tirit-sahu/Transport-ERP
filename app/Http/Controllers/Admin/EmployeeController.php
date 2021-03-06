<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Admin\Employee;
use App\Admin\Company;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emps=Employee::all();
        return view('admin.company.emp.view',compact('emps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.company.emp.create');
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
            'name' => 'required|max:255',
            'designation' => 'required',
             
        ];

        $messages=[
            'name.required'=>'Employee Name is required. Please fill-up.',
            'name.max'=>'Employee Name should not be greater then 255.',

            'designation.required'=>'Designation is required.',
            'bank_branch.max'=>'Bank  Branch Name should not be greater then 255.',
            
          ];


          $validator = Validator::make($request->all(), $rules, $messages);


         if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $emp=new Employee();
        $emp->name=$request->name;
        $emp->designation=$request->designation;
        $emp->doj=$request->doj;
        $emp->pan_no=$request->pan_no;
        $emp->lisence_no=$request->lisence_no;
        $emp->lisence_date=$request->lisence_date;
        $emp->lisence_date_exp=$request->lisence_date_exp;
        $emp->dob=$request->dob;
        $emp->mobile=$request->mobile;
        $emp->mobile2=$request->mobile2;
        $emp->salary=$request->salary;
        $emp->bank_ac_no=$request->bank_ac_no;
        $emp->address=$request->address;
        $emp->status=$request->status;
        $emp->ipaddress=$request->getClientIp();
        $emp->createdby=auth()->user()->id;
        
        $emp->save();
        return redirect()->back()->with('message','Employee Add Successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emp=Employee::find($id);
        return view('admin.company.emp.edit',compact('emp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $emp=Employee::find($id);


        $emp->name=$request->name;

        $emp->designation=$request->designation;
        $emp->doj=$request->doj;
        $emp->pan_no=$request->pan_no;
        $emp->lisence_no=$request->lisence_no;
        $emp->lisence_date=$request->lisence_date;
        $emp->lisence_date_exp=$request->lisence_date_exp;
        $emp->dob=$request->dob;
        $emp->mobile=$request->mobile;
        $emp->mobile2=$request->mobile2;
        $emp->salary=$request->salary;
        $emp->bank_ac_no=$request->bank_ac_no;
        $emp->address=$request->address;
        $emp->status=$request->status;
        $emp->ipaddress=$request->getClientIp();
        $emp->createdby=auth()->user()->id;
        
        $emp->save();
        return redirect(route('emp.index'))->with('message','Employee Update Successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $emp=Employee::find($id)->delete();
          return redirect(route('emp.index'))->with('message','Employee Details Delete Successfully.');
    }
}

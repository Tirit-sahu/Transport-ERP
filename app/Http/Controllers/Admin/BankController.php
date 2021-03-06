<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Admin\Bank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banks=Bank::where('status',1)->orderBy('id','DESC')->get();
        return view('admin.company.bank.view',compact('banks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.company.bank.create');
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
            'bank_name' => 'required|max:255',
            'bank_branch' => 'required|max:255',
             
        ];

        $messages=[
            'bank_name.required'=>'Bank Name is required. Please fill-up.',
            'bank_name.max'=>'Bank Name should not be greater then 255.',

            'bank_branch.required'=>'Bank Branch Name is required. Please fill-up.',
            'bank_branch.max'=>'Bank  Branch Name should not be greater then 255.',
            
          ];

        $validator = Validator::make($request->all(), $rules, $messages);


         if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }


        $bank=new Bank();
         $bank->ac_holder_name=$request->ac_holder_name;
         $bank->holder_mobile=$request->holder_mobile;
         $bank->bank_name=$request->bank_name;
         $bank->bank_branch=$request->bank_branch;
         $bank->bank_ac=$request->bank_ac;

         $bank->bank_IFSC=$request->bank_IFSC;
         $bank->bank_address=$request->bank_address;
         $bank->createdby=auth()->user()->id;
         $bank->save();
         return back()->with('message','Bank Details Add Successully');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function show(Bank $bank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bank=Bank::find($id);
        return view('admin.company.bank.edit',compact('bank'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $rules=[
            'bank_name' => 'required|max:255',
            'bank_branch' => 'required|max:255',
             
        ];

        $messages=[
            'bank_name.required'=>'Bank Name is required. Please fill-up.',
            'bank_name.max'=>'Bank Name should not be greater then 255.',

            'bank_branch.required'=>'Bank Branch Name is required. Please fill-up.',
            'bank_branch.max'=>'Bank  Branch Name should not be greater then 255.',
            
          ];

          $validator = Validator::make($request->all(), $rules, $messages);


         if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

         $bank=Bank::find($id);
         $bank->ac_holder_name=$request->ac_holder_name;
         $bank->holder_mobile=$request->holder_mobile;
         $bank->bank_name=$request->bank_name;
         $bank->bank_branch=$request->bank_branch;
         $bank->bank_ac=$request->bank_ac;

         $bank->bank_IFSC=$request->bank_IFSC;
         $bank->bank_address=$request->bank_address;
         $bank->createdby=auth()->user()->id;
         $bank->save();
         return redirect(route('bank.index'))->with('message','Bank Details Update Successully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $bank=Bank::find($id)->delete();
         return back()->with('message','Bank Details Delete Successully');
    }
}

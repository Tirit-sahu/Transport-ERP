<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class NewRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       


       $users= User::all();
       return view('admin.regi.view',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.regi.create'); 
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
        'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'usertype' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);



        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->usertype=$request->usertype;
        $user->password=Hash::make($request->password);
        $user->save();
        return redirect()->back()->with('message','User Create Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewRegister  $newRegister
     * @return \Illuminate\Http\Response
     */
    public function show(NewRegister $newRegister)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewRegister  $newRegister
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find($id);
        return view('admin.regi.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewRegister  $newRegister
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $request->validate([
        'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id],
            'usertype' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);


       $user=User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->usertype=$request->usertype;
        $user->password=Hash::make($request->password);
        $user->save();
        return redirect(route('regi.index'))->with('message','User Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewRegister  $newRegister
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id)->delete();
        return redirect(route('regi.index'))->with('message','User Delete Successfully');
    }
}

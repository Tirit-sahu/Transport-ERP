<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use Redirect;

class HeadMasterController extends Controller
{
    public function index(Request $request)
    {
        $head_masters = DB::table('head_masters')->orderBy('id', 'DESC')->get();
        return view('admin.HeadMaster', ['head_masters'=>$head_masters]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        DB::table('head_masters')->insert($data);
        $request->session()->flash('message', 'New Record Added Successfully');
        return Redirect::back();
    }


    public function edit($id, Request $request)
    {
        $head_masters = DB::table('head_masters')->orderBy('id', 'DESC')->get();
        $head_master = DB::table('head_masters')->where('id', $id)->first();
        return view('admin.HeadMaster', ['head_master'=>$head_master, 'head_masters'=>$head_masters]);
    }

    public function update($id, Request $request)
    {
        $data = $request->all();
        DB::table('head_masters')->where('id', $id)->update($data);
        $request->session()->flash('message', 'Record Updated Successfully');
        return Redirect('/headMaster');
    }

    public function destroy($id, Request $request)
    {
        DB::table('head_masters')->where('id', $id)->delete();
        $request->session()->flash('message', 'Record Deleted Successfully');
        return Redirect('/headMaster');
    }


}

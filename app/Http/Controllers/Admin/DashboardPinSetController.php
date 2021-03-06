<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Redirect;

class DashboardPinSetController extends Controller
{
    public function home()
    {
        $dashboard_pin_sets = DB::table('dashboard_pin_sets')->get();
        return view('admin.home', ['dashboard_pin_sets'=>$dashboard_pin_sets]);
    }

    public function checkMenuPassword(Request $request, EncryptionController $e)
    {
        $menuId = $request->menuId;
        $password = $request->password;
        $route = $request->route;

        $count = DB::table('dashboard_pin_sets')->where(['password'=>$password, 'id'=>$menuId])->count();
        return $count;
    }

    public function menuPasswordSetting(Request $request)
    {
        $dashboard_pin_sets = DB::table('dashboard_pin_sets')->get();
        return view('admin.menu-password-setting', ['dashboard_pin_sets'=>$dashboard_pin_sets]);   
    }

    public function changeMenuPassword(Request $request)
    {
        $id = $request->menuId;
        $password = $request->password;

        if (DB::table('dashboard_pin_sets')
        ->where('id', $id)
        ->update(['password'=>$password])) {
            return 1;
        }else{
            return 0;
        }
    }


}

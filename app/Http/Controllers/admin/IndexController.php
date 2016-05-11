<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;
use DB;

class IndexController extends Controller{
    public function index(){

        return view('admin.index');
    }
    public function glmenu(){
//        DB::table('admin_menu')->get();
        return view('admin.glmenu');
    }
    public function xgmenu($menuid){
        $xgmenu=DB::table('admin_menu')->where(['mid'=>$menuid])->first();
        return view('admin.xgmenu',['daid'=>$xgmenu]);
    }
}

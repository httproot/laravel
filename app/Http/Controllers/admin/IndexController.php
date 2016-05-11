<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;
use DB;
use App\Menu;

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
    public function xgmenupost(){
        $menu=new Menu();
        $menu->menu_name=$_POST['menu_name'];
        $menu->url=$_POST['url'];
        $menu->tubiao=$_POST['tubiao'];
        $menu->youfubiao=$_POST['youfubiao'];
        $menu->fid=$_POST['fid'];
        $menu->px=$_POST['px'];
        $menu->save();
    }
}

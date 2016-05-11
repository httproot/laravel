<?php
/**
 * Created by PhpStorm.
 * User: sun
 * Date: 2016/5/9
 * Time: 23:54
 */
namespace App\Http\Controllers;
use App\User;
use App\Models\Permission;
use App\Models\Role;

class QxController extends Controller{
    public function addZu($name,$display_name='',$description=''){
//        创建用户组
        $zu = new Role();
        $zu ->name         = $name;
        $zu ->display_name = $display_name; // optional
        $zu ->description  = $description; // optional
        $zu ->save();
    }
    public function addQuanxian($name,$display_name=''){
        $quanx = new Permission;
        $quanx->name = $name;
        $quanx->display_name = $display_name;
        $quanx->save();
    }
    //添加用户组权限
    public function zuAddQuanXian($zuname,$quanxianidarr){
        $owner = Role::where('name','=',$zuname)->first();
        $owner->perms()->sync($quanxianidarr);
    }
    //添加用户到组
    public function addUseToZu($name,$zuid){
        $user = User::where('name','=',$name)->first();
        $user->attachRole( $zuid );
    }
    //判断用户是否有权限
    public function panDuan($usename,$quanxianid){
        $user = User::where('name','=',$usename)->first();
        var_dump($user->can($quanxianid));
    }
    public function test(){
//        $this->addZu('dsadsa');
//        $this->addQuanxian('test');
//        $this->zuAddQuanXian('dsadsa',[5]);
//        $this->addUseToZu('admin',7);
        $this->panDuan('admin','3');
    }
}
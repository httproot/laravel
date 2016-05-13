<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
use App\Models\Permission;
use App\User;
class IndexController extends Controller{
    public function index(){
        return view('index');
    }
    public function haha(){
        //创建用户组
//        $admin = new Role();
//        $admin->name         = 'admin';
//        $admin->display_name = 'User Administrator'; // optional
//        $admin->description  = 'User is allowed to manage and edit other users'; // optional
//        $admin->save();

//        $owner = new Role;
//        $owner->name = 'Owner';
//        $owner->save();
        //创建权限
//        $manageUsers = new Permission;
//        $manageUsers->name = 'manage_users';
//        $manageUsers->display_name = 'Manage Users';
//        $manageUsers->save();

//        $managePosts = new Permission;
//        $managePosts->name = 'manage_posts';
//        $managePosts->display_name = 'Manage Posts';
//        $managePosts->save();
////        //添加用户组权限
//        $owner = Role::where('name','=','Owner')->first();
        //
//        $owner->perms()->sync(array(3,4));//

        //获取用户
//        $user = User::where('name','=','ye')->first();
        // 可以使用 Entrust 提供的便捷方法用户授权
        // 注: 参数可以为 Role 对象, 数组, 或者 ID
//        $user->attachRole( 59 );
//        $user->roles()->attach( 59 );
        //判断是否属于某个组
//        var_dump($user->hasRole("admin"));
        //判断是否拥有某个权限
//        var_dump($user->can("create-post"));
    }


}
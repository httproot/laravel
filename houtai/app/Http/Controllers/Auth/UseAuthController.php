<?php
namespace App\Http\Controllers\Auth;
use App\User;
use App\Http\Controllers\Controller;

class UseAuthController extends AuthController{
    protected $redirectPath='/admin';//登陆成功后跳转页面
    protected $redirectAfterLogout='/';//默认退出后跳转页面
    protected $loginPath='auth/login';//默认登陆URl
    protected $username='email';//与password字段配合的

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'status'=>'1',
        ]);
    }
}
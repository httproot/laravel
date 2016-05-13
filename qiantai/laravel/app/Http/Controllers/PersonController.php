<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use DB;
use App\Need;
use App\Http\Controllers;
use App\Http\Requests;
use App\User;
use App\Company;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class PersonController extends Controller
{
    /**
     * 个人中心主页 交易管理区
     */
    public function zhanghu()
    {
        return view('person_zhanghu');
    }

    public function postzhanghu(Request $request)
    {
        $uid = Auth::user()->uid;
        $componyname = $request->input('PurposeCompany');
        $componytype = $request->input('PurposeCompanyType');
        $satus = DB::table('componyes')->where('uid', $uid)->update(['name' => $componyname], ['type' => $componytype]);


        $name = $request->input('TrueName');
        $email = $request->input('Email');
        $qq = $request->input('QQ');
        $satus = DB::table('users')->where('uid', $uid)->update(['name' => $name], ['email' => $email], ['qq' => $qq]);

    }

    /**
     * 个人中心需求
     */
    public function xuqiu()
    {
        $need = Need::all();
        return view('person_xuqiu', ['need' => $need]);
    }

    /**
     * 增加需求信息
     */
    public function xuqiuPost(Request $request)
    {
        $need = new Need();
        $need->uid = Auth::user()->uid;
        $need->xq_title = $request->input('xq_title');
        $need->xq_account = $request->input('xq_account');
        $need->xq_money = $request->input('xq_money');
        $need->xq_place = $request->input('xq_place');
        $need->ucontent = $request->input('ucontent');
        $need->endtime = $request->input('endtime');
        $need->pubtime = date('Y-m-d H:i:s', time());
        $need->save();

    }

    /**
     * 个人中心订单管理
     */
    public function order()
    {
        return view('perosn_dingdan');
    }

    /**
     * 个人中心信息界面
     */
    public function info()
    {
        return view('person_info');
    }

    public function postInfo(Request $request)
    {
        $request->input('');
    }

    /**
     * 个人中心账户中心
     */
    public function account()
    {

        $uid = Auth::user()->uid;

        $com = DB::table('companyes')->where('uid', $uid)->get();


        return view('person_account', ['com' => $com]);
    }

    /**
     * 找回密码功能
     */
    public function  pwdforget()
    {
        return view('pwdforget');
    }

    public function postpwdforget(Request $request)
    {
        //dd($request->all());

        $uid = Auth::user()->uid;
        $Db = DB::table('users')->where('uid', $uid)->get();
        $newpassword = $request->input('oldPwd');
        $hashpassword = bcrypt($newpassword);//密码加密方式不正确
        if (Auth::user()->password == $hashpassword) {
            if ($request->input('newPwd') == $request->input('anewPwd')) {
                $users = User::find(Auth::id());
                $users->password = bcrypt($request->input('anewPwd'));
                $users->save();
            } else {
                echo "密码不正确";
            }
        } else {
            echo "原始密码不正确";
        }
    }


}

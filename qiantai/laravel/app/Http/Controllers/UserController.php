<?php

namespace App\Http\Controllers;

use App\Company;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;


class UserController extends Controller
{


    public function msgCode($mobile)
    {
        require 'api/TopSdk.php';

        $c = new \TopClient;
        $c->appkey = '23354169';
        $c->secretKey = 'ea4dc37f20f04d97a029a99363b17912';
        $c->format = 'json';
        $req = new \AlibabaAliqinFcSmsNumSendRequest;
        $req->setExtend("reg");
        $req->setSmsType("normal");
        $req->setSmsFreeSignName("注册验证");
        $code = mt_rand(1000, 9999);
        session([$mobile, $code]);

        $req->setSmsParam("{\"code\":\"{$code}\",\"product\":\"找煤网\"}");
        $req->setRecNum($mobile);
        $req->setSmsTemplateCode("SMS_8325118");
        $resp = $c->execute($req);

//        return json_encode($resp);
//        return response->json_encode($resp);
    }

    /**
     * 生成验证码
     */
    public function captcha($tmp)
    {
        $builder = new CaptchaBuilder();
        $builder->build(90, 38);
        $builder->setMaxBehindLines(4);
        header('Content-type: image/jpeg');
        session()->put('code', $builder->getPhrase());
        return $builder->output();
    }

    /**
     * 注册第二页
     */
    public function regDetail()
    {
        return view('auth.register2');
    }

    /**
     * 注册第三页
     */
    public function getRegSuccess()
    {
        return view('auth.register3');
    }

    public function postRegSuccess(Request $request)
    {
//        dd($request->all());
        $company = new Company();
        $company->uid = $request->user()->uid;
        $company->number = mt_rand(10000, 99999);
        $company->is_hot = 0;
        $company->name = $request->input('name');
        $company->type = $request->input('type');
        $company->address = $request->input('CompanyAddress');
        $company->save();

        $user = User::find($request->user()->uid);
        $user->name = $request->input('TrueName');
        $user->email = $request->input('Email');
        $user->qq = $request->input('QQ');
        $user->status = 1;
        $user->save();

        return redirect('/');


    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Procduce;
use App\Supply;
use App\Cusmanager;

class caiGouController extends Controller
{
   public function index() {
        $pro = Procduce::leftJoin('cusmanagers' , 'procduces.sid' , '=' , 'cusmanagers.mid')->get();
        // dd($pro);
        // $cus = Cusmanager::where('sid' , $pro->sid)->get();

        return view('caigou_index' , ['pro'=>$pro ]);
   }

    public function add() {
        return view('caigou_add');
    }

    public function addPost(Request $req) {
        $pro = new Procduce();
        
        $pro->number = $req->number;//订单号
        $pro->pubtime = $req->pubtime;//发布时间
        $pro->place = $req->place;//交货地点
        $pro->describe = $req->describe;//产品描述
        $pro->sid = $req->sid;//客服专员
        return $pro->save() ? 'OK' : 'NO!'; 
    }

    public function radd() {
        return view('caigou_radd');
    }

    public function rPost(Request $req) {
        $cus = new Cusmanager();

        $cus->name = $req->name;//客户专员姓名
        $cus->mobile = $req->mobile;//专员电话
        $cus->qq = $req->qq;//专员qq
        return $cus->save() ? 'OK' : 'NO';
    }

}

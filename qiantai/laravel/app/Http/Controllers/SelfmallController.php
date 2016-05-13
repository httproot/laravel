<?php
/**
 * 找煤商城
 * 
 * @author jin <blovejin@foxmail.com>
 * @link http://blog.sina.com.cn/blovejin
 * @since 1.0 2016.05.09
 * @copyright all rights reserved jin
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Produces;
use App\Proattrs;

/**
 * 
 */
class SelfmallController extends Controller
{
    public function product() {
        //查询出在售产品的数量
        $produces_num = Produces::where('publish', '=', '1')->count('*');

        //计算出所有产品的总重量
        $sum_inventory = Produces::sum('inventory');

        //按降序查询出所有产品挂牌状态(对应字段publish)为1(1代表自营,2代表已售)的3条产品
        $produces_ziying = Produces::where('publish', '=', '1')->orderBy('pid', 'desc')->take(3)->get();

        //按降序查询出所有产品挂牌状态(对应字段publish)为1(1代表自营,2代表已售)的3条产品
        $produces_yishou = Produces::where('publish', '=', '2')->orderBy('pid', 'desc')->take(3)->get();

        return view('selfmall', [
            'produces_ziying'=>$produces_ziying, 
            'produces_yishou'=>$produces_yishou,
            'sum_inventory'=>$sum_inventory, 
            'produces_num'=>$produces_num,
        ]);
    }

    public function detail($pid) {
        $produce = Produces::where('pid', '=', $pid)->first();
        if(!$produce) {
            //如果输入了非法字段,查询不出类容,直接跳转到商城首页
            return redirect('/selfmall');
        }else {
            $proattrs = Proattrs::where('pid', '=', $pid)->first();
            return view('detail', ['produce'=>$produce, 'proattrs'=>$proattrs]);    
        }
    }
}

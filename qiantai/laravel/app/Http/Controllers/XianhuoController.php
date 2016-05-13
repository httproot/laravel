<?php

namespace App\Http\Controllers;

use App\Procduce;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class XianhuoController extends Controller
{

   protected  $row; //查询结果集

    public function ajaxSearch(Request $request)
    {

        $parse = $request->get("parseurl");
        $parses = parse_url($parse);
        //将&后面部分解析出来 $collection成为数组形式
        parse_str($parses['query'], $collection);

        //判断是否存在相关键值 分类sql查询
        if(array_key_exists('coal_cate_type_id', $collection)){
             $value = array_values($collection);

            $row= DB::table('produces')->where('postion',$value)->get();
           // $this->row =$row;//将结果集数据保存在$row中
            // $rows=json_encode($row,JSON_FORCE_OBJECT);
            if(!empty($row)){
               return   response()->json($row);
            } else {
                return response()->json(['msg'=>"failed"]);
            }

        }
        //判断是否存在相关键值 产地sql查询
        if(array_key_exists('chandi_id', $collection)){
            return response()->json($collection);
        }

        //判断是否存在相关键值  名企sql查询
        if(array_key_exists('company_id', $collection)){
            return response()->json($collection);
        }


    }

    //get 获取表单数据
   public  function getSearch()
    {
        $row =$this->row;
        if(empty($row)){
           $row=DB::table('produces')->get();
           return view('xianhuo',['row'=>$row]);
        }else{
            return view ('xianhuo',['row'=>$row]);
        }
    }





}

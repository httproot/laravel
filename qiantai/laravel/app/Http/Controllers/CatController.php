<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cat;
use App\Article;
use App\Need;
use Auth;
use DB;
class CatController extends Controller
{
   
    //添加栏目
    public function postCat(Request $req)
    {

        if(empty($req->title)){
            return "打字不会吗？";
        }else{
            
            if(!DB::table('cats')->where('title',$req->title)->get()){
                $art = new Cat;
                $art->title = $req->title;
                $art->pubtime = date('Y-m-d H:i:s',time());
                $art->save();
                return "添加栏目成功！";
            }else{
                return "栏目冲突！";
            }
        }                                          
    }

    //显示添加栏目页面
    public function getCat()
    {
        return view('cat');
    }

    //查看栏目
     public function lookCat()
    {
        $cat = cat::get();
        return view('lookcat',['cat'=>$cat]);
    }

   //编辑栏目
    public function bianji($cat_id)
    {
        //  $cat = cat::get();
        //  return view('upcat',['cat'=>$cat]);
        // // return 123;
         $cat = Cat::where('cat_id',$cat_id)->first();
         return view('upcat',$cat);
        // return 123;

    }

    //提交编辑栏目
    public function cup(Request $req,$cat_id)
    {
        $cat = new Cat;
        $cat->title = $req->title;
        $cat->num = $req->num;
        $cat->pubtime = date('Y-m-d H:i:s',time());
        $cat->save();
        return "修改栏目成功";
    }

    //删除栏目
    public function shanchu($cat_id)
    {
         // return 123;
        //缺少判断栏目下是否有文章
        $shanchu = DB::table('cats')->where('cat_id',$cat_id)->value('num');
        if($shanchu == 0){
             DB::table('cats')->where('cat_id',$cat_id)->delete();
             return "删除栏目成功";
        }else{
            return "该栏目下有文章禁止删除请先删除文章";
        }
        
    }


    //用户提交需求
    public function xuqiu(Request $req)
    {

        if(!Auth::user()){
            return "请登录";
        }

        if(!$req->ucontent == ''){
            $need = new Need;
            // $req->user();
            // return  Auth::user()->id;
            $need->uid = Auth::user()->id;
            $need->ucontent = $req->ucontent;
            $need->save();
            return "请您稍等我们马上处理";
        }else{
            return "请填写信息哦！";
        }
        
    }

    //滚动菜单

}






































    // //显示添加文章页面

    // public function getArt()
    // {
    //     $cat = cat::get();
        
    //     return view('cat',['cat'=>$cat]);
    // }

    //添加文章
    // public function postArt(Request $req)
    // {

    //     $art = new Article;
    //     // dd($req->all());
    //     $art->cat_id = $req->cat_id;
    //     $art->sort_id = $req->sort_id;
    //     $art->arttitle = $req->title;
    //     $art->content = $req->content;
    //     $art->click = $req->click;
    //     $art->keys = $req->keys;
    //     $art->click = $req->click;
    //     $art->desction = $req->desction;
    //     $art->click = $req->click;
    //     $art->opentype = $req->opentype;
    //     $art->link = $req->link;
    //     $art->addtime = date('Y-m-d H:i:m',time());
    //     $art->save();
    //     // return view('xhhq',['art'=>$art]);

    // // }
    // //前台
    // //查看文章
    //  public function wenzhang($article_id)
    //  {
       
    //    //点击量加1
    //     DB::table('articles')->where('article_id',$article_id)->increment('click',1);

    //     $art = DB::table('articles')->where('article_id',$article_id)->first();
              
    //     // dd($art->cat_id);
    //     $mb = DB::table('cats')->where('cat_id',$art->cat_id)->first();
    //     // echo "<pre>";
    //     // var_dump($art);
    //     // dd($mb);
    //      return view('article',['art'=>$art,'mb'=>$mb]);
    //  }

    //  //前台
    //  //展示数据
    // public function index($cat_id=25)
    // {
    // //这里还需要写判断 判断传递过来的参数是否合法
    // //不需要if就可以写出来

    //     // if($cat_id == null){
    //     //     $cat = Cat::all();
    //     //     $art = Article::paginate(5);
    //     //     // $cat = DB::table('cats')->get();
    //     //     // $art = DB::table('articles')->paginate(5);
    //     //     return view('xhhq',['art'=>$art,'cat'=>$cat]);

    //     // }else{

    //         $cat = Cat::all();
    //         $art = Article::where('cat_id',$cat_id)->paginate(5);
    //         // $cat = DB::table('cats')->get();
    //         // $art = DB::table('articles')->where('cat_id',$cat_id)->paginate(5);
    //         return view('xhhq',['art'=>$art,'cat'=>$cat]);
    //    }
        
    //     // return view('xhhq',['cat'=>$cat]);
    // } 
// }

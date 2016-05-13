<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cat;
use App\Article;
use App\Order;
use Auth;
use DB;
class ArticleController extends Controller
{
   //查看文章列表
    public function lookArt(){
        $art = DB::table('articles')->paginate(5);
        return view('lookart',['art'=>$art]);

    }
   //添加文章
    public function postArt(Request $req)
    {
            if(!DB::table('articles')->where('arttitle',$req->arttitle)->get()){
                $art = new Article;
                // $a = Article::where('arttitle',$req->arttitle)->get();
                $art->cat_id = $req->cat_id;
                $art->sort_id = $req->sort_id;
                $art->arttitle = $req->arttitle;
                $art->content = $req->content;
                $art->click = $req->click;
                $art->keys = $req->keys;
                $art->desction = $req->desction;
                $art->opentype = $req->opentype;
                $art->link = $req->link;
                $art->addtime = date('Y-m-d H:i:s',time());
                $art->save();
                //给栏目文章数加1
                DB::table('cats')->where('cat_id',$req->cat_id)->increment('num',1);
                return "添加文章成功！";
            }else{
                return "添加文章失败";
                }                               
    }

    //显示添加文章页面
    public function getArt()
    {
        $cat = DB::table('cats')->get();
        return view('article',['cat'=>$cat]);
    }

   //编辑文章
    public function abianji($article_id)
    {

         $art = Article::where('article_id',$article_id)->first();
         return view('uparticle',$art);
        // return 123;

    }

    //提交编辑文章
    public function aup(Request $req,$article_id){

        $art = new Article;
        $art->cat_id = $req->cat_id;
        $art->sort_id = $req->sort_id;
        $art->arttitle = $req->arttitle;
        $art->content = $req->content;
        $art->click = $req->click;
        $art->keys = $req->keys;
        $art->desction = $req->desction;
        $art->opentype = $req->opentype;
        $art->link = $req->link;
        $art->addtime = date('Y-m-d H:i:s',time());
        $art->save();
        return "修改文章成功";
        // return $article_id;

    }


    //删除文章
     public function ashanchu($article_id)
    {
        $cat =  DB::table('articles')->where('article_id',$article_id)->first();            
        DB::table('cats')->where('cat_id',$cat->cat_id)->decrement('num',1);
        DB::table('articles')->where('article_id',$article_id)->delete();
        
        return "删除文章成功";
        
    }


    //前台文章显示界面 点击加1
    public function wenzhang($article_id)
     {
        //判断文章是否存在
       if(!Article::where('article_id',$article_id)->first()){
        return "该文章不存在请不要乱输入了！";
       }

        //点击量加1 显示文章 面包屑
        DB::table('articles')->where('article_id',$article_id)->increment('click',1);
        $art = DB::table('articles')->where('article_id',$article_id)->first();       
        $mb = DB::table('cats')->where('cat_id',$art->cat_id)->first();
        //滚动展示内容
        $user = Auth::user();
        $order = Order::all();
        return view('xarticle',['art'=>$art,'mb'=>$mb,'order'=>$order,'user'=>$user]);
     }

     //前台内容显示界面
     public function xhhq(Request $req , $cat_id='')
    {
        // return Auth::user();
            //默认显示页面
            if($cat_id == ''){
                // return 123;
                $cat = Cat::all();
                //滚动展示内容
                $user = Auth::user();
                $order = Order::all();
                $art = Article::where('cat_id',26)->paginate(15);
                return view('xhhq',['art'=>$art,'cat'=>$cat,'order'=>$order,'user'=>$user]);
            }

            //判断页面是否合法
           if(!Cat::where('cat_id',$req->cat_id)->first() && $cat_id != ''){
                return "该页面不存在！";
            }           
            //滚动展示内容
            $order = Order::all();
            $cat = Cat::all();
            $user = Auth::user();
            $art = Article::where('cat_id',$cat_id)->paginate(15);
            return view('xhhq',['art'=>$art,'cat'=>$cat,'order'=>$order,'user'=>$user]);      
    } 

} 



   
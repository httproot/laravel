<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    protected $product= ['不限','动力煤','炼焦煤','无烟煤','兰炭','生物燃料'];
    protected $postion= ['不限','内蒙古','山西','陕西','河北','山东','朝鲜','安徽','河南','俄罗斯','黑龙江','吉林'];
    protected $ishost = ['','','','','','','',''];
    protected $place  = ['不限','华东','华北','西北','西南','华中','东北','华南','国外'];

   public  function search()
   {
       $get =$_GET['page_no'];
      return response()->json(['msg'=>$get]) ;
   }

    public function  xianhuo(Request $request,$product=0)
    {

       $req= $request->all();
        var_dump($req);
       if(array_key_exists('product',$req))
       {
       }
        return view ('xianhuo');
    }

    //产品搜索集成sphinx
    public function SphinxSearch()
    {

    }
}

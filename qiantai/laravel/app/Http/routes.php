<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//start 现货行情筛选 ajax获取查询数据
Route::post('ajax','XianhuoController@ajaxSearch');

Route::get('ajax','XianhuoController@getSearch');
//ends 现货行情筛选ends

Route::get('index','PersonController@index');
Route::post('index','PersonController@postIndex');
//用户中心页面 start
Route::get('person/xuqiu','PersonController@xuqiu');
Route::post('person/xuqiu','PersonController@xuqiuPost');

//个人中心首页
Route::get('person/zhanghu','PersonController@zhanghu');
//个人中心订单
Route::get('person/order','PersonController@order');

Route::post('person/zhanghu','PersonController@postzhanghu');


//个人中心信息
Route::get('person/info','PersonController@info');
//个人中心账户/账户安全
Route::get('person/account','PersonController@account');
//个人中心找回密码
Route::get('person/pwdforget','PersonController@pwdforget');
Route::post('person/pwdforget','PersonController@postpwdforget');
//Route::post('person/account','PersonController@postAccount');
//用户中心页面 end



//注册页面 start
// 首页
Route::get('/', 'IndexController@index');
// 登录
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['middleware' => 'App\Http\Middleware\LoginMiddleware', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// 注册
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', ['middleware' => 'App\Http\Middleware\RegMiddleware', 'uses' => 'Auth\AuthController@postRegister']);
// 注册页面之二、三
Route::get('auth/registerDetail', 'UserController@regDetail');
Route::get('auth/registerSuccess', 'UserController@getRegSuccess');
Route::post('auth/registerSuccess', 'UserController@postRegSuccess');

// 验证码
Route::get('/captcha/{tmp}', 'UserController@captcha');

Route::get('/xianhuo', 'SupplyController@index');
//注册页面结束 end


//文章列表功能 start
//前台
//文章展示
//Route::get('xhhq/{cat_id?}','ArticleController@index');
//Route::get('xhhq/article/{article_id?}','ArticleController@wenzhang');
////根据栏目展示文章
//// Route::get('xhhq/{cat_id}','ArticleController@cc');

////后台
////添加文章
//Route::post('article/add','ArticleController@postArt');
////文章添加界面
//Route::get('article/add','ArticleController@getArt');

////后台
////栏目
//Route::post('article/lanmu','ArticleController@postCat');
//Route::get('article/lanmu','ArticleController@getCat');

/****************************朱海龙*****************************/
/**************后台添加栏目*************************************/
Route::post('cat','CatController@postCat');
Route::get('cat','CatController@getCat');
/**************后台查看栏目*************************************/
Route::post('lookcat','CatController@Cat');
Route::get('lookcat','CatController@lookCat');
Route::get('bianji/{cat_id}','CatController@bianji');
Route::post('bianji/{cat_id}','CatController@cup');
Route::get('shanchu/{cat_id}','CatController@shanchu');
/**************后台添加文章*************************************/
Route::post('article','ArticleController@postArt');
Route::get('article','ArticleController@getArt');
/**************后台查看文章*************************************/
Route::post('lookart','ArticleController@art');
Route::get('lookart','ArticleController@lookArt');
Route::get('abianji/{article_id}','ArticleController@abianji');
Route::post('abianji/{article_id}','ArticleController@aup');
Route::get('ashanchu/{article_id}','ArticleController@ashanchu');
/**************前台查看文章*************************************/
Route::get('xhhq/article/{article_id}','ArticleController@wenzhang');
Route::get('xhhq/{cat_id?}','ArticleController@xhhq');
// Route::get('xhhq','ArticleController@xhhq');
/**************客户需求******************************************/
Route::post('xhhq','CatController@xuqiu');
Route::post('xhhq/{cat_id?}','CatController@xuqiu');
Route::post('xhhq/article/{article_id?}','CatController@xuqiu');
/*****************************朱海龙*****************************/

//文章列表功能  end

// 找煤商城 start
Route::get('/selfmall', 'SelfmallController@product'); //找煤商城栏目首页

Route::get('/selfmall/detail/{pid}', 'SelfmallController@detail');//产品详细页

//找煤商城 ends

//现货资源页面  start
Route::get('/xianhuo', function () {
    return view('xianhuo');
});
Route::post('searchValue','SearchController@search');
Route::get('xianhuo/{product?}','SearchController@xianhuo');
//现货资源页面  end



//采购信息 start
//采购首页
Route::get('caigou', 'caiGouController@index');

//采购主体信息
Route::get('caigou/add' , 'caiGouController@add');
Route::post('caigou/add' , 'caiGouController@addPost');

//采购客户专员信息
Route::get('caigou/radd' , 'caiGouController@radd');
Route::post('caigou/radd' , 'caiGouController@rPost');
//采购信息 end


//头部关于我们信息 start
Route::get('related/about',function(){
    return view('about');
});
//头部关于我们信息 ends
<!DOCTYPE html>{{print_r($errors)}}
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>登录 </title>

    <link href="{{asset('style/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('style/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{asset('style/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('style/css/style.css')}}" rel="stylesheet">
    <script src="{{asset('style/js/jquery-2.1.1.js')}}"></script>
</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">
      
            <div class="col-md-6">
                <h2 class="font-bold">欢迎进入+</h2>

                <p>
                    完美的设计和精确的管理主题与超过50页的新的网络应用程序视图。
                </p>

                <p>
                    Lorem Ipsum只是印刷排版业虚拟文本 Lorem Ipsum自从16世纪以后一直是行业的标准虚拟文本。
                </p>

                <p>
                    当一个未知的打印机把厨房型和炒它做字体样本。
                </p>

                <p>
                    <small>它不仅存活了五个世纪，而且还跨越了电子排版，基本上保持不变。</small>
                </p>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <form class="m-t" role="form" action="{{url('auth/login')}}"method="post">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="email" required="">
                        </div>
                        <div class="form-group">

                            <input type="password" class="form-control" name="password" placeholder="密码" required="">
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">登录</button>

                        <a href="{{url('admin/forget_password')}}">
                            <small>忘记密码?</small>
                        </a>
                        {!! csrf_field() !!}

                    </form>
                    <p class="text-muted text-center">
                        <small>没有账户?</small>
                    </p>
                    <a class="btn btn-sm btn-white btn-block" href="{{url('auth/register')}}">创建账户</a>
                    <p class="m-t">
                        <small>其他方式登录:QQ 微博 &copy; 2014</small>
                    </p>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Example Company版权所有
            </div>
            <div class="col-md-6 text-right">
               <small>© 2014-2015</small>
            </div>
        </div>
    </div>
</body>
<script>
    //表单验证ajax数据
</script>
</html>
